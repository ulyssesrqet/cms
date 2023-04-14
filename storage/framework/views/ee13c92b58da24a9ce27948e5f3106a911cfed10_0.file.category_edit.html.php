<?php
/* Smarty version 4.3.1, created on 2023-04-14 16:04:56
  from 'D:\chenjunhui\chencms\cms\resources\views\admin\category_edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64390928eacf55_82824659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee13c92b58da24a9ce27948e5f3106a911cfed10' => 
    array (
      0 => 'D:\\chenjunhui\\chencms\\cms\\resources\\views\\admin\\category_edit.html',
      1 => 1681459244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64390928eacf55_82824659 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
  <h2><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>修改<?php } else { ?>添加<?php }?>栏目</h2>
</div>
<div class="main-section">
  <form method="post" action="/admin/category/save" class="j-form">
    <ul class="form-group form-inline">
      <li>
        <input type="text" class="form-control" name="name" value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value['name'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" required>
        <label>栏目名称</label>
      </li>
      <li>
        <input type="number" class="form-control" name="sort" value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value['sort'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" required>
        <label>排序值</label>
      </li>
      <li>
        <input type="number" class="form-control" name="parent_id" value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value['parent_id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" required>
        <label>父排序值</label>
      </li>
      <li>
        <input type="hidden" name="id" value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['id']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="submit" value="提交表单" class="btn btn-primary">
        <a href="/admin/category/index" class="btn btn-default">返回列表</a>
      </li>
    </ul>
  </form>
</div>
<?php echo '<script'; ?>
>
  main.menuActive('category');
  main.ajaxForm('.j-form', function () {
    main.content('/admin/category/index');
  });
<?php echo '</script'; ?>
><?php }
}
