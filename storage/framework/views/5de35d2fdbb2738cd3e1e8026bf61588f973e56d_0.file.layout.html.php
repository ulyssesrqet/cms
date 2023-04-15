<?php
/* Smarty version 4.3.1, created on 2023-04-15 11:29:49
  from 'D:\chenjunhui\chencms\cms\resources\views\layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643a1a2d01c366_27237468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5de35d2fdbb2738cd3e1e8026bf61588f973e56d' => 
    array (
      0 => 'D:\\chenjunhui\\chencms\\cms\\resources\\views\\layout.html',
      1 => 1681529376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643a1a2d01c366_27237468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['title']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
 - 笔记本电脑故障在线诊断系统</title>
  <link rel="stylesheet" href="/static/css/style.css">
  <?php echo '<script'; ?>
 type="text/javascript" src="/static/js/jquery.min.js"><?php echo '</script'; ?>
>
<!--  <?php echo '<script'; ?>
 type="text/javascript" src="/static/js/common.js"><?php echo '</script'; ?>
>-->
  <style>
    input{
      float: left;
      height: 35px;
      width: 20%;
      margin-top:10px ;
      margin-left:240px ;
      padding-left: 13px;
    }
    nav {
        background-color: #f8f8f8;
        font-family: Arial, sans-serif;
    }

    ul {
        margin-top: 0;
        margin-right: 225px;
        float: left;
        list-style: none;
        padding: 0;
    }

    li {
        width: 100px;
        margin: 0px;
        float: left;
        position: relative;
    }

    a {
        color: #333;
        display: block;
        padding: 8px 12px;
        text-decoration: none;
    }

    /* 下拉菜单 */
    li ul {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1;
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 0;
    }

    li:hover ul {
        display: block;
    }

    li ul li {
        float: none;
    }

    li ul li a {
        padding: 8px 12px;
        white-space: nowrap;
    }

    li ul li:hover {
        background-color: #f2f2f2;
    }

    /* 悬停效果 */
    li:hover {
        background-color: #ccc;
    }

    /* 当前页 */
    li.current {
        background-color: #eee;
    }



  </style>
</head>
<body>
  <!--页面顶部-->
  <nav>
  <div class="top">
<!--    <div class="top-container">-->
      <form action="/index/getAim" method="get" style="margin: 0px">
        <input type="text" name="question" placeholder="请输入你的问题...">
      </form>
      <div class="top-nav">
          <ul>
            <li><a href="/" class="<?php if ($_smarty_tpl->tpl_vars['id']->value == 0) {?>curr<?php }?>">首页</a></li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                  <li class="nav-li" style="display: inline" id="nav-li">
                      <a href=""><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['name'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a>
<!--                      <a href="/?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" class="<?php if ($_smarty_tpl->tpl_vars['id']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?>curr<?php }?>"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['name'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a>-->
                      <ul class="drop-box">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorychild']->value, 'vc');
$_smarty_tpl->tpl_vars['vc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vc']->value) {
$_smarty_tpl->tpl_vars['vc']->do_else = false;
?>
                              <?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == $_smarty_tpl->tpl_vars['vc']->value['parent_id']) {?>
                                 <li class="drop-li" >
                                     <a href="/?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['vc']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" class="<?php if ($_smarty_tpl->tpl_vars['id']->value == $_smarty_tpl->tpl_vars['vc']->value['id']) {?>curr<?php }?>"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['vc']->value['name'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a>
                                 </li>
                              <?php }?>
                         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </ul>
                  </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value['name'] != '') {?>
              <li><a href="#" style="font-size:20px;color: red"><i class="fa fa-user fa-fw"></i><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['user']->value['name'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a></li>
              <li><a href="/admin/login/logout" style="color: cornflowerblue;margin-left: 10px">退出</a></li>
            <?php } else { ?>
            <li><a  href="/admin/login/index">登录/注册</a></li>
            <?php }?>
          </ul>
      </div>


      <div class="top-toggle jq-toggle-btn"><i></i><i></i><i></i></div>
    </div>

<!--  </div>-->
  </nav>
  <!--页面内容-->
  <div class="main">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1359463674643a1a2d01add9_71493061', "content");
?>

  </div>
  <!--页面尾部-->
  <div class="footer">笔记本电脑故障在线诊断系统</div>
</body>
</html>

<?php echo '<script'; ?>
>
<?php echo '</script'; ?>
>

<?php }
/* {block "content"} */
class Block_1359463674643a1a2d01add9_71493061 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1359463674643a1a2d01add9_71493061',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
