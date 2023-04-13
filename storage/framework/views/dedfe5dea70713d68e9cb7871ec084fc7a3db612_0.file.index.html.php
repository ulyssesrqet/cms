<?php
/* Smarty version 4.3.1, created on 2023-04-11 17:55:48
  from 'D:\chenjunhui\chencms\cms\resources\views\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64352ea44e65b6_67283002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dedfe5dea70713d68e9cb7871ec084fc7a3db612' => 
    array (
      0 => 'D:\\chenjunhui\\chencms\\cms\\resources\\views\\admin\\index.html',
      1 => 1681206925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64352ea44e65b6_67283002 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
  <h2>首页</h2>
</div>
<div class="main-section">
  <div class="panel panel-default">
    <div class="panel-heading">欢迎访问</div>
    <div class="panel-body">欢迎进入笔记本电脑故障内容管理系统！</div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">服务器信息</div>
    <ul class="list-group">
      <li class="list-group-item">
        系统环境：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['server_info']->value['server_version'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

      </li>
      <li class="list-group-item">
        MySQL版本：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['server_info']->value['mysql_version'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

      </li>
      <li class="list-group-item">
        文件上传限制：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['server_info']->value['upload_max_filesize'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

      </li>
      <li class="list-group-item">
        脚本执行时限：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['server_info']->value['max_execution_time'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

      </li>
      <li class="list-group-item">
        服务器时间：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['server_info']->value['server_time'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

      </li>
    </ul>
  </div>
</div>
<?php echo '<script'; ?>
>
  main.menuActive('index');
<?php echo '</script'; ?>
><?php }
}
