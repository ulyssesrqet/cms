<?php
/* Smarty version 4.1.0, created on 2022-05-20 10:46:44
  from 'C:\Users\Administrator\Desktop\cms\resources\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628701143db211_69683996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c6be0e915ff59695b54c07aec757adc7a411934' => 
    array (
      0 => 'C:\\Users\\Administrator\\Desktop\\cms\\resources\\views\\index.html',
      1 => 1652749535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sub/slide.html' => 1,
    'file:sub/list.html' => 1,
  ),
),false)) {
function content_628701143db211_69683996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2038768438628701143d3511_09547818', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block "content"} */
class Block_2038768438628701143d3511_09547818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2038768438628701143d3511_09547818',
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
      </div>
</div>
</div>
<?php
}
}
/* {/block "content"} */
}
