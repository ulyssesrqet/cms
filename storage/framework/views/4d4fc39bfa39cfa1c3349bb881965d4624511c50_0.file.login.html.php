<?php
/* Smarty version 4.3.1, created on 2023-04-11 17:38:12
  from 'D:\chenjunhui\chencms\cms\resources\views\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64352a84d65042_79182255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d4fc39bfa39cfa1c3349bb881965d4624511c50' => 
    array (
      0 => 'D:\\chenjunhui\\chencms\\cms\\resources\\views\\admin\\login.html',
      1 => 1654832354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64352a84d65042_79182255 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/common/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/common/toastr.js/2.1.4/toastr.min.css">
    <link rel="stylesheet" href="/static/admin/css/main.css">
    <?php echo '<script'; ?>
 src="/static/common/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/common/twitter-bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/common/toastr.js/2.1.4/toastr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/admin/js/main.js"><?php echo '</script'; ?>
>
    <title>登录</title>
</head>
<body class="login" >
<div class="container" id="regs1" >
    <form method="post" action="/admin/login/login" class="j-login">
        <h1>登录</h1>
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="用户名" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="密码" required>
        </div>
        <div class="form-group">
            <input type="text" name="captcha" class="form-control" placeholder="验证码" required>
        </div>
        <div class="form-group">
            <div class="login-captcha"><img src="/admin/login/captcha" alt="captcha"></div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-lg btn-success" value="登录">
        </div>
        <div>没有账号去<a href="/admin/login/index1" >注册</a>下次登录去<a href="/index/index">首页</a></div>
    </form>
    <div class="main-loading" style="display:none">
        <div class="dot-carousel"></div>
    </div>
</div>

</div>
<?php echo '<script'; ?>
>
  /*  function lo(){
        document.getElementById("regs1").style.display="none";
        document.getElementById("regs2").style.display="block";
       /!* $('#regs2').hide();
        $('#regs1').show();*!/
    }*/
   /* function res(){
        document.getElementById("regs2").style.display="none";
        document.getElementById("regs1").style.display="block";
       $('#regs1').hide();
        $('#regs2').show();
    }*/
    $('.login-captcha img').click(function () {
        $(this).attr('src', '/admin/login/captcha?_=' + Math.random());
    });
    main.ajaxForm('.j-login', function (data) {
        if(data['msg']==1){
            location.href = '/admin/index/index'}
        else{
            location.href = '/index/index'}

    }, function () {
        $('.login-captcha img').click();
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
