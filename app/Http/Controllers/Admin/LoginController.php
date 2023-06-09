<?php
namespace App\Http\Controllers\Admin;

use App\User;
use myframe\Captcha;
use myframe\Controller;

class LoginController extends CommonController
{
    protected $checkLoginExclude = ['index','index1','res', 'login', 'captcha', 'logout'];
    /**
     * 管理员登录页面
     * @return string 视图文件
     */
    public function index()
    {
        //渲染登录页面
        return $this->fetch('admin/login');
    }
    public function index1()
    {
        //渲染登录页面
        return $this->fetch('admin/register');
    }

    /**
     * 注册
     * @param User $user
     * @throws \myframe\HttpException
     */
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
        $psMD5 = $this->passwordMD5($password, 'salt');

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
     * 登录
     * @param User $user
     * @throws \myframe\HttpException
     */
    public function login(User $user)
    {
        //获取用户名和密码
        $username = $this->request->post('username', '');
        $password = $this->request->post('password'. '');
        //获取验证码
        $captcha = $this->request->post('captcha', '');
        //判断验证码
        if (!$this->checkCaptcha($captcha)) {
            $this->error('验证码不正确');
        }
        //根据用户名获取用户信息
        $data = $user->where('username', $username)->first();
        //判断用户是否存在
        if (!$data) {
            //返回结果
            $this->error('用户不存在');
        }
        //根据提交的密码计算加密后的密码
        $psMD5 = $this->passwordMD5($password, $data['salt']);
        //判断密码是否正确
        if ($data['password'] != $psMD5) {
            //返回结果
            $this->error('用户名或密码错误');
        }
        //保存登录态
        //session_start();
        $this->setLogin([
            'name' => $data['username'],
            'id' => $data['id'],
            'power'=>$data['power']
        ]);
        //返回结果
        $this->success($data['power']);
    }

    /**
     * 输出验证码图片
     * @param Captcha $captcha Captcha对象
     * @throws \myframe\HttpException
     */
    public function captcha(Captcha $captcha)
    {
        //生成验证码字符串
        $code = $captcha->create();
        //保存验证码
        $this->setCaptcha($code);
        //生成验证码图片
        $captcha->show($code);
    }

    /**
     * 验证验证码
     * @param $code 验证码
     * @return bool 验证结果，true正确，false错误
     */
    public function checkCaptcha($code)
    {
        if (isset($_SESSION['cms']['captcha'])) {
            $captcha = $_SESSION['cms']['captcha'];
            unset($_SESSION['cms']['captcha']);
            return strtolower($code) == strtolower($captcha);
        }
        return false;
    }

    /**
     * 将验证码保存到session中
     * @param $code验证码
     */
    public function setCaptcha($code)
    {
        $_SESSION['cms']['captcha'] = $code;
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

    /**
     * 保存用户信息
     * @param array $user 用户信息
     */
    public function setLogin(array $user = []) {
        $_SESSION['cms']['admin'] = $user;
    }

    /**
     * 退出登录
     * @throws \myframe\HttpException
     */
    public function logout()
    {
        $this->setLogin([]);
        $this->redirect('/index/index');
    }
}