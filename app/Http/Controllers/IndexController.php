<?php


namespace App\Http\Controllers;


use App\Article;
use App\Category;
use App\Collect;
use App\Comment;
use myframe\Controller;
use myframe\Page;

class IndexController extends Controller
    {
    public function index(Category $category,Article $article)
    {    session_start();
        $user = $_SESSION['cms']['admin'];
        $id=(int)$this->request->get('id',0);
        $page=(int)$this->request->get("page",1);
        $size=6;
        $offset=($page-1)*$size;
        $where=[];
        if($id){
            //筛选栏目
            $where['cid']=$id;
            $category_name=$category->where('id',$id)->value('name');
            $this->assign('category_name',$category_name);
        }
        $where['show']=1;

        //查询文章列表
        $data=$article->where($where)->orderBy('id','DESC')->limit($offset,$size)->get(['id','title','author','image','created_at']);
        $this->assign('article',$data);
        $this->assign('id',$id);
        $this->assign('user',$user);
        //分页
        $total=$article->where($where)->count();
        $url="?id=$id&page=";
        $this->assign('page_html',Page::html($url,$total,$page,$size));
        //公共模块
        $this->category($category);

        $this->title($id?$category_name:"首页");
        $this->sidebar($article);
        return $this->fetch('index');
    }
    protected  function title($title=''){
        $this->assign('title',$title);
    }
    public function category(Category $category)
    {
       $data=$category->orderBy('id','ASC')->get();
       $this->assign('category',$data);
    }
    protected function sidebar(Article $article){
        //最新文章
        $data=$article->where('show',1)->orderBy('id','DESC')->limit(5)->get(['id','title']);
        $this->assign('article_new',$data);
        //最新文章
        $data=$article->where('show',1)->orderBy('views','DESC')->limit(10)->get(['id','title']);
        $this->assign('article_hot',$data);
    }
    public function show(Category $category,Article $article,Comment $comment){
        session_start();
        $user = $_SESSION['cms']['admin'];
        $id=$this->request->get('id');
        $data=$article->where('id',$id)->where('show',1)->first();
        if($data){
            $category_name=$category->where('id',$data['cid'])->value('name');
            $this->assign('category_name',$category_name);
        }
        $comments = $comment->getComments($id);
        $this->assign('user',$user);
        $this->assign('article',$data);
        $this->assign('comments', $comments);
        $this->assign('id',isset($data['cid'])?$data['cid']:0);
        //公共模块
        $this->category($category);
        $this->sidebar($article);
        $this->title($data?$data['title']:'');
        $article->where('id',$id)->where('show',1)->increment('views');
        $data['views']+=1;
        //查询上一篇与下一篇
        $prev=$article->where('id','<',$id)->where('show',1)->orderBy('id','DESC')->first(['id','title']);
        $next=$article->where('id','>',$id)->where('show',1)->orderBy('id','ASC')->first(['id','title']);
        $this->assign('article_prev',$prev);
        $this->assign('article_next',$next);
        return $this->fetch('show');
    }

    public function getUser()
    {
        session_start();
        return $user = $_SESSION['cms']['admin'];
    }

    /**
     * 用户添加评论
     * @param Comment $comment
     * @param Article $article
     * @throws \myframe\HttpException
     */
    public function savecomment(Comment $comment,Article $article)
    {
        $user = $this->getUser();
        $data = [
            'content'=>$this->request->post('comment',''),
            'user_id'=>$user['id'],
            'article_id'=>$this->request->get('id',''),
            'create_at'=>time()
        ];
        $comment->insert($data);

        $this->redirect('/index/show?id='.$data['article_id']);
    }

    /**
     * 用户删除评论
     * @param Comment $comment
     * @throws \myframe\HttpException
     */
    public function deleteComment(Comment $comment)
    {
        $id = $this->request->get('id', '');
        $data = $comment->where('id', $id)->first();
        $comment->where('id', $id)->delete();
        $this->redirect('/index/show?id='.$data['article_id']);
    }

    /**
     * 收藏   ----前台页面不跳转没写出来
     * @param Collect $collect
     * @throws \myframe\HttpException
     */
    public function collect(Collect $collect)
    {
        $user = $this->getUser();
        $id = $this->request->get('id','');
        $arr = $collect->where('aid',$id)->where('uid',$user['id'])->first();
        print_r($user);
        print_r($id);
        if ($arr)
        {print_r("111");
            $this->error('您已经收藏过该篇文章');
        }else{
            $data =[
                'uid'=>$user['id'],
                'aid'=>$id
            ];
            $collect->insert($data);
            $this->success('收藏成功');
        }

    }

    //todo 添加文章模糊搜索，对现象匹配问题
    public function getAim(Category $category , Article $article){
        $id=(int)$this->request->get('id',0);
        $page=(int)$this->request->get("page",1);
        $size=6;
        $offset=($page-1)*$size;
        $where=[];
        $where['show']=1;

        $question = $this->request->get('question','');
        $question1 = "%$question%";
        $data = $article->where("content",'like',$question1)->orderBy('id','DESC')->limit($offset,$size)->get();
//        传递导航栏分类
        $this->category($category);
//        传递侧边文章显示
        $this->sidebar($article);
//        将查询到的文章传递给接下来的页面
        $this->assign('article',$data);
//        todo 去掉轮播图
        $this->assign('id',999);

//       文章分页 todo 需要完善后退时显示全部文章bug
        $total=$article->where("content",'like',$question1)->count();
        $url="?id=$id&page=";
        $this->assign('page_html',Page::html($url,$total,$page,$size));
        return $this->fetch('index');
    }
}