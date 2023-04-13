<?php
/* Smarty version 4.1.0, created on 2022-06-10 06:44:28
  from 'E:\PHP\cms\resources\views\admin\register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a277cc1f6ed0_42034459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc0569c262185cdb7ebabac285451a0ae76221d5' => 
    array (
      0 => 'E:\\PHP\\cms\\resources\\views\\admin\\register.html',
      1 => 1654782733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a277cc1f6ed0_42034459 (Smarty_Internal_Template $_smarty_tpl) {
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
  <!--jquery-->
  <?php echo '<script'; ?>
 src="/static/js/jquery.min.js"><?php echo '</script'; ?>
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
<body class="login">
<div class="container" >

  <form   action="/admin/login/res" method="post" class="j-register"  >
    <h1>注册</h1>
    <div class="form-group">
      <input type="text" name="username" class="form-control" placeholder="用户名" required>
    </div>
    <div class="form-group">
      <input type="password" name="password" class="form-control" placeholder="密码" required>
    </div>
    <div class="form-group">
      <input type="password" name="password1" class="form-control" placeholder="确认密码" required>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-lg btn-success" value="注册">
    </div>
    <div>已有账号去<a href="/admin/login/index" >登录</a>下次注册去<a href="/index/index">首页</a></div>
  </form>
  <div class="main-loading" style="display:none">
    <div class="dot-carousel"></div>
  </div>
</div>

</div>
<?php echo '<script'; ?>
>

/*  $("#submit").click(function(){
    alert('111');
    $.get({
      url:"/admin/user/Register",
      data:$("#form").serialize(),
      success:function(data){
        if(data.code == 0){
          //  去登录
          location.href = "/login/index";
        }
      }
    });
  })*/

  main.ajaxForm('.j-register', function (data) {

   location.href = '/index/index';

  });

  /*  function lo(){
       document.getElementById("regs1").style.display="none";
       document.getElementById("regs2").style.display="block";
      /!* $('#regs2').hide();
       $('#regs1').show();*!/
   }*/
  /* function res(){
     /!* document.getElementById("regs2").style.display="none";
      document.getElementById("regs1").style.display="block";
     $('#regs1').hide();
      $('#regs2').show();*!/
     location.href='/admin/login/index1';
   }*/
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
