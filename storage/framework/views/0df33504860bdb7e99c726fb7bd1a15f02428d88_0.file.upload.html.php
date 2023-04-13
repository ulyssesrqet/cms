<?php
/* Smarty version 4.1.0, created on 2022-05-09 11:07:27
  from 'D:\www\cms12\resources\views\admin\upload.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6278856f330688_18720077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0df33504860bdb7e99c726fb7bd1a15f02428d88' => 
    array (
      0 => 'D:\\www\\cms12\\resources\\views\\admin\\upload.html',
      1 => 1652065638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6278856f330688_18720077 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>文件上传</h3>
<form action="/admin/article/handle" method="post" class="j-form" enctype="multipart/form-data">
    <div>
        <label for="file">上传文件：</label>
        <input type="file" name="image" id="file" />
    </div>
    <div class="btn">
        <input type="submit" value="上传" />
    </div>
</form>
<?php echo '<script'; ?>
>
    main.menuActive('article');
    main.ajaxForm('.j-form');
<?php echo '</script'; ?>
>
<?php }
}
