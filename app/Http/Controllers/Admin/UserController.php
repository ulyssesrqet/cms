<?php
namespace App\Http\Controllers\Admin;

use App\Comment;
use App\User;

class UserController extends CommonController
{
    public function index(User $user)
    {
        $data = $user->where('power','0')->get();

        $this->assign('users', $data);
        return $this->fetch('admin/user_list');
    }

    /**
     * 通过名字进行模糊查询
     * @param User $user
     * @return string
     * @throws \SmartyException
     */
    public  function  getUsername(User $user){
        $username = $this->request->get('username', '');
        //print_r($username);

        //$sql="SELECT * from cms_user where power=0 and username like '%$username%'";
        $user1="%$username%";
       // print_r($sql);
        $data=$user->where('power','=','0')->where("username",'like',$user1)->get();
       // print_r($data);
        $this->assign('users', $data);
       /* print_r($data);*/
        return $this->fetch('admin/user_list');
    }

    /**
     * @param User $user
     * @throws \myframe\HttpException
     */
    public function delete(User $user,Comment $comment)
    {
        $id = $this->request->get('id', '');
        $comment->where('user_id',$id)->get();
        $user->where('id', $id)->delete();
        $this->success('删除成功');
    }

    public function res(User $user){
        //获取用户名和密码
        $username = $this->request->post('username', '');
        $password = $this->request->post('password'. '');
        $password1 = $this->request->post('password1'. '');

        //根据用户名获取用户信息
        $data = $user->where('username', $username)->first();
        //判断用户是否存在
        if ($data) {
            //返回结果
            $this->error('用户已存在');
        }

        //判断两次密码是否一致
        if ($password != $password1) {
            //返回结果
            $this->error('两次密码不一致');
        }

        //根据提交的密码计算加密后的密码
        $psMD5 = $this->passwordMD5($password, '');

        $data = [
            'username' => $username,
            'password' => $psMD5,
            'salt'=>'salt',
            'power'=>0
        ];

        $user->insert($data);
        $this->success($password);
    }

    /**
     * 密码加密
     * @param $password 明文密码
     * @param $salt 盐
     * @return string 加密密码
     */
    public function passwordMD5($password, $salt)
    {
        return md5(md5($password).$salt);
    }
}