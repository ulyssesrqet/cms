<?php
/* Smarty version 4.1.0, created on 2022-05-17 08:23:11
  from 'D:\www\cms34\resources\views\test\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6282eaefb42d05_98307963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5aecad0a026a4ba89bc04f5a9d09e94c4a6475e9' => 
    array (
      0 => 'D:\\www\\cms34\\resources\\views\\test\\show.html',
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
function content_6282eaefb42d05_98307963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12674650096282eaefae8f80_37941635', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "test/layout.html");
}
/* {block "content"} */
class Block_12674650096282eaefae8f80_37941635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12674650096282eaefae8f80_37941635',
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
