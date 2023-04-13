<?php
/* Smarty version 4.1.0, created on 2022-05-16 15:21:17
  from 'D:\www\cms12\resources\views\test\layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6281fb6ddbba09_49977161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '535c06d6f63b89ad786212e4548b15d156251931' => 
    array (
      0 => 'D:\\www\\cms12\\resources\\views\\test\\layout.html',
      1 => 1652685339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6281fb6ddbba09_49977161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body {
            color: white;
            text-align: center;
            vertical-align: middle;
            font-size: 50px;
        }
        .top {
            height: 100px;
            line-height: 100px;
            background: red;
        }
        .main {
            height: 400px;
            background: blue;
        }
        .slide {
            height: 100px;
        }
        .main-content .list {
            width: 70%;
            height: 300px;
            float: left;
            background: #3300aa;
        }
        .main-content .sidebar {
            width: 30%;
            height: 300px;
            float: left;
            background: #555555;
        }
        .bottom {
            height: 100px;
            line-height: 100px;
            background: red;
        }
    </style>
</head>
<body>
<div>
    <div class="top">顶部导航</div>
    <div class="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14296090576281fb6dd98788_46654926', "content");
?>

    </div>
    <div class="bottom">
        尾部
    </div>
</div>
</body>
</html><?php }
/* {block "content"} */
class Block_14296090576281fb6dd98788_46654926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14296090576281fb6dd98788_46654926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
