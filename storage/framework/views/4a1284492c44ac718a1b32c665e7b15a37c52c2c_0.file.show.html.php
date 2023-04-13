<?php
/* Smarty version 4.1.0, created on 2023-03-27 22:09:13
  from 'C:\Users\13700\Desktop\wangchenhao\chencms\cms\resources\views\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6421a38916d815_58190409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a1284492c44ac718a1b32c665e7b15a37c52c2c' => 
    array (
      0 => 'C:\\Users\\13700\\Desktop\\wangchenhao\\chencms\\cms\\resources\\views\\show.html',
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
function content_6421a38916d815_58190409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7674997376421a3891635c1_00804557', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block "content"} */
class Block_7674997376421a3891635c1_00804557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7674997376421a3891635c1_00804557',
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
