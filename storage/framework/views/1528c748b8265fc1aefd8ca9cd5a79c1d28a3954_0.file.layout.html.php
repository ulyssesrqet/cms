<?php
/* Smarty version 4.1.0, created on 2022-05-17 08:19:11
  from 'D:\www\cms34\resources\views\test\layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6282e9ffa48d04_98234173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1528c748b8265fc1aefd8ca9cd5a79c1d28a3954' => 
    array (
      0 => 'D:\\www\\cms34\\resources\\views\\test\\layout.html',
      1 => 1652746749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6282e9ffa48d04_98234173 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="top">顶部导航 e</div>
    <div class="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20286019936282e9ffa44e86_18851301', "content");
?>

    </div>
    <div class="bottom">
        尾部
    </div>
</div>
</body>
</html><?php }
/* {block "content"} */
class Block_20286019936282e9ffa44e86_18851301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20286019936282e9ffa44e86_18851301',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
