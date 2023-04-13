<?php
/* Smarty version 4.1.0, created on 2022-05-17 08:18:53
  from 'D:\www\cms34\resources\views\test\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6282e9ed674582_00544924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab951f361c70fc0f395016079605394270dba585' => 
    array (
      0 => 'D:\\www\\cms34\\resources\\views\\test\\index.html',
      1 => 1652746731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6282e9ed674582_00544924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_861152206282e9ed660d03_64025351', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "test/layout.html");
}
/* {block "content"} */
class Block_861152206282e9ed660d03_64025351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_861152206282e9ed660d03_64025351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
    文章列表
</div>
<?php
}
}
/* {/block "content"} */
}
