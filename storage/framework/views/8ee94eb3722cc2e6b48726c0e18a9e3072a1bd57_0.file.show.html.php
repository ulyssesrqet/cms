<?php
/* Smarty version 4.1.0, created on 2022-05-15 22:57:16
  from 'D:\www\cms12\resources\views\test\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628114cc5b8d87_36502453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ee94eb3722cc2e6b48726c0e18a9e3072a1bd57' => 
    array (
      0 => 'D:\\www\\cms12\\resources\\views\\test\\show.html',
      1 => 1652626594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:test/slide.html' => 1,
    'file:test/list.html' => 1,
    'file:test/sidebar.html' => 1,
  ),
),false)) {
function content_628114cc5b8d87_36502453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1389372873628114cc5b1085_45865804', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "test/layout.html");
}
/* {block "content"} */
class Block_1389372873628114cc5b1085_45865804 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1389372873628114cc5b1085_45865804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
<!--    内容区域-->
    <?php $_smarty_tpl->_subTemplateRender("file:test/slide.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="main-content">
        <?php $_smarty_tpl->_subTemplateRender("file:test/list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("file:test/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
