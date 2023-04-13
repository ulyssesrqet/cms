<?php
/* Smarty version 4.1.0, created on 2022-06-03 14:12:38
  from 'E:\PHP\cms\resources\views\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6299a656a199c9_92935160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7398633747db582f62b907ea9eb43889053b7ff' => 
    array (
      0 => 'E:\\PHP\\cms\\resources\\views\\show.html',
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
function content_6299a656a199c9_92935160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1351416056299a656a16e96_27018922', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.html");
}
/* {block "content"} */
class Block_1351416056299a656a16e96_27018922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1351416056299a656a16e96_27018922',
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
