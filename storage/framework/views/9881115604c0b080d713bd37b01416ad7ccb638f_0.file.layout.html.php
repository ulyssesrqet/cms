<?php
/* Smarty version 4.1.0, created on 2023-03-24 22:17:30
  from 'C:\Users\13700\Desktop\wangchenhao\chencms\cms\resources\views\layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_641db0fa8de750_32212933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9881115604c0b080d713bd37b01416ad7ccb638f' => 
    array (
      0 => 'C:\\Users\\13700\\Desktop\\wangchenhao\\chencms\\cms\\resources\\views\\layout.html',
      1 => 1679667447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641db0fa8de750_32212933 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 - 内容管理系统</title>
  <link rel="stylesheet" href="/static/css/style.css">
  <?php echo '<script'; ?>
 src="/static/js/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/static/js/common.js"><?php echo '</script'; ?>
>
  <style>
    #aaa{
      position: absolute;
      margin-left: 1300px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <!--页面顶部-->
  <div class="top">
    <div class="top-container">
      <div class="top-logo">
        <a href="./">
          <img src="/static/images/computer.png" alt="内容管理系统">
        </a>
      </div>
      <div class="top-nav">
        <a href="/" class="<?php if ($_smarty_tpl->tpl_vars['id']->value == 0) {?>curr<?php }?>">首页</a>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
          <a href="/?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['id']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?>curr<?php }?>"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if ($_smarty_tpl->tpl_vars['user']->value['name'] != '') {?>
        <!--<div id="aaa"><ul class="nav navbar-right"  style="font-size: 20px ;margin-top: -10px ">-->

          <a href="#" style="font-size:20px;color: red"><i class="fa fa-user fa-fw"></i><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
       <!-- <a href="/index/collectList/?id=100">我的收藏</a></li>-->
          <a href="/admin/login/logout" style="color: cornflowerblue;margin-left: 10px">退出
          </a>

        </ul><!--</div>-->
        <?php } else { ?>
       <!-- <div id="aaa">--><a  href="/admin/login/index">登录/注册</a><!--</div>--><?php }?>
      </div>

      <div class="top-toggle jq-toggle-btn"><i></i><i></i><i></i></div>
      <!--<?php if ($_smarty_tpl->tpl_vars['user']->value['name'] != '') {?>
      <div id="aaa"><ul class="nav navbar-right"  style="font-size: 20px ;margin-top: -10px ">
          欢迎
          <a href="#"><i class="fa fa-user fa-fw"></i><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
          <a href="/admin/login/logout" style="color: cornflowerblue;margin-left: 10px">退出
          </a>

      </ul></div>
      <?php } else { ?>
      <div id="aaa"><a  href="/admin/login/index">登录/注册</a></div><?php }?>-->
    </div>

  </div>
  <!--页面内容-->
  <div class="main">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1380626207641db0fa8ddd77_51455126', "content");
?>

  </div>
  <!--页面尾部-->
  <div class="footer">笔记本电脑故障在线诊断系统</div>
</body>
</html><?php }
/* {block "content"} */
class Block_1380626207641db0fa8ddd77_51455126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1380626207641db0fa8ddd77_51455126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
