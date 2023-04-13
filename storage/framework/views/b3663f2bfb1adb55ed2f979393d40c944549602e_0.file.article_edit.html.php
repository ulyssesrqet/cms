<?php
/* Smarty version 4.3.1, created on 2023-04-11 19:07:39
  from 'D:\chenjunhui\chencms\cms\resources\views\admin\article_edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64353f7b38f160_90905636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3663f2bfb1adb55ed2f979393d40c944549602e' => 
    array (
      0 => 'D:\\chenjunhui\\chencms\\cms\\resources\\views\\admin\\article_edit.html',
      1 => 1652266954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64353f7b38f160_90905636 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-title">
  <h2><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>修改<?php } else { ?>添加<?php }?>文章</h2>
</div>
<div class="main-section">
  <form method="post" action="/admin/article/save" class="j-form">
    <ul class="form-group form-inline">
      <li>
        <input type="text" class="form-control" name="title" value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" required>
        <label>文章标题</label>
      </li>
      <li>
        <select name="cid" class="form-control" style="min-width:196px;">
          <option value="0">---</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
          <option value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id'] === $_smarty_tpl->tpl_vars['data']->value['cid']) {?>selected<?php }?>><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['name'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
 </option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <label>所属分类</label>
      </li>
      <li>
        <input type="text" class="form-control" name="author" value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value['author'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" required>
        <label>作者</label>
      </li>
      <li>
        <label>封面图</label>
        <input type="file" name="image">
      </li>
      <?php if ($_smarty_tpl->tpl_vars['data']->value['image']) {?>
      <li>
        <ul class="main-imglist">
          <li>
            <div class="main-imglist-item">
              <a href="/uploads/images/<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value['image'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" target="_blank"><img src="/uploads/images/<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value['image'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"></a>
            </div>
          </li>
        </ul>
      </li>
      <?php }?>
      <li>
        <label>文章内容</label>
        <div><textarea class="j-content" name="content" style="height:200px"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['data']->value['content'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</textarea></div>
      </li>
      <li>
        <label><input type="checkbox" name="show" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['show']) {?>checked<?php }?>> 发布</label>
      </li>
      <li>
        <input type="hidden" name="id" value="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['id']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="submit" value="提交表单" class="btn btn-primary">
        <a href="/admin/article/index" class="btn btn-default">返回列表</a>
      </li>
    </ul>
  </form>
</div>
<?php echo '<script'; ?>
>
  main.menuActive('article');
  main.ajaxForm('.j-form', function () {
    main.content('/admin/article/index');
  });
  main.loadJS('/static/admin/editor/ueditor1.4.3.3/ueditor.config.js');
  main.loadJS('/static/admin/editor/ueditor1.4.3.3/ueditor.all.min.js');
  main.loadJS('/static/admin/editor/main.editor.js');
  main.editor($('.j-content'), 'article_edit', function(opt) {
    opt.UEDITOR_HOME_URL = '/static/admin/editor/ueditor1.4.3.3/'
  }, function(editor) {
    $('.j-form').submit(function() {
      //同步编辑器内容
      editor.sync();
    });
  });
<?php echo '</script'; ?>
><?php }
}
