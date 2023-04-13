<?php
namespace App\Http\Controllers\Admin;


use App\Article;
use App\Comment;
use App\User;

class  CommentController extends CommonController
{
    /**
     * 获取所有的评论
     * @param Comment $comment
     * @return string
     * @throws \SmartyException
     */
    public function getAllComments(Comment $comment)
    {
        $data=$comment->getAllComments();
        /*echo '<pre>';
         print_r($data) ;*/
        $this->assign('data', $data);
        return $this->fetch('admin/comment');
    }

    /**
     *删除评论
     * @param Comment $comment
     * @throws \myframe\HttpException
     */
    public function delete(Comment $comment)
    {
        $id = $this->request->get('id', '');

        $comment->where('id', $id)->delete();
        $this->success('删除成功');
    }




}