<?php
/* Smarty version 4.1.0, created on 2022-05-16 15:13:57
  from 'D:\www\cms12\resources\views\test\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6281f9b519a288_00226141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5785f78c9e24813f1ef8372632de198120f27db' => 
    array (
      0 => 'D:\\www\\cms12\\resources\\views\\test\\index.html',
      1 => 1652685234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6281f9b519a288_00226141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6284930946281f9b5196404_30098403', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "test/layout.html");
}
/* {block "content"} */
class Block_6284930946281f9b5196404_30098403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6284930946281f9b5196404_30098403',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
    文章详情
</div>
<?php
}
}
/* {/block "content"} */
}
