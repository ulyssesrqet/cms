<?php
/* Smarty version 4.1.0, created on 2022-06-03 14:12:36
  from 'E:\PHP\cms\resources\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6299a65481f194_25773752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '571bd213caf4be7e5177493564a24897c18c6a00' => 
    array (
      0 => 'E:\\PHP\\cms\\resources\\views\\index.html',
      1 => 1653055022,
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
function content_6299a65481f194_25773752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8572294426299a6548189c4_49520822', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block "content"} */
class Block_8572294426299a6548189c4_49520822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8572294426299a6548189c4_49520822',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:sub/slide.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
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
