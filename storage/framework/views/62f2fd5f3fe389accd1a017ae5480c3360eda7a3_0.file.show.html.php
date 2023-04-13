<?php
/* Smarty version 4.3.1, created on 2023-04-11 22:48:38
  from 'D:\chenjunhui\chencms\cms\resources\views\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64357346a8a7c5_50764809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62f2fd5f3fe389accd1a017ae5480c3360eda7a3' => 
    array (
      0 => 'D:\\chenjunhui\\chencms\\cms\\resources\\views\\show.html',
      1 => 1574603908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sub/show.html' => 1,
    'file:sub/sidebar.html' => 1,
  ),
),false)) {
function content_64357346a8a7c5_50764809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157927626464357346a85b89_84204145', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block "content"} */
class Block_157927626464357346a85b89_84204145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_157927626464357346a85b89_84204145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="main-body">
    <div class="main-wrap">
      <div class="main-left">
        <?php $_smarty_tpl->_subTemplateRender("file:sub/show.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      <div class="main-right">
        <?php $_smarty_tpl->_subTemplateRender("file:sub/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
    </div>
  </div>
<?php
}
}
/* {/block "content"} */
}
