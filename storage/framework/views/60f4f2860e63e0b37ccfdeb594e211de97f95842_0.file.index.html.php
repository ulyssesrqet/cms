<?php
/* Smarty version 4.3.1, created on 2023-04-15 02:18:28
  from 'D:\chenjunhui\chencms\cms\resources\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643998f4de8017_79551465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60f4f2860e63e0b37ccfdeb594e211de97f95842' => 
    array (
      0 => 'D:\\chenjunhui\\chencms\\cms\\resources\\views\\index.html',
      1 => 1681496304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sub/slide.html' => 1,
    'file:sub/list.html' => 1,
    'file:sub/sidebar.html' => 1,
  ),
),false)) {
function content_643998f4de8017_79551465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1306580713643998f4dd87a7_63343690', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block "content"} */
class Block_1306580713643998f4dd87a7_63343690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1306580713643998f4dd87a7_63343690',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
<!--  <?php $_smarty_tpl->_subTemplateRender("file:sub/slide.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>html-->
<?php }?>
<div class="main-body">
<div class="main-wrap">
  <div class="main-left">
    <!-- 文章列表 -->
    <?php $_smarty_tpl->_subTemplateRender("file:sub/list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>
  <div class="main-right">
    <!-- 侧边栏 -->
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
