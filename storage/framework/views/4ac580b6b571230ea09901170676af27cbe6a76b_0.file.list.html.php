<?php
/* Smarty version 4.3.1, created on 2023-04-12 16:41:02
  from 'D:\chenjunhui\chencms\cms\resources\views\sub\list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64366e9ec40cd1_12892091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ac580b6b571230ea09901170676af27cbe6a76b' => 
    array (
      0 => 'D:\\chenjunhui\\chencms\\cms\\resources\\views\\sub\\list.html',
      1 => 1681288853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64366e9ec40cd1_12892091 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="/public/static/common/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
<div class="al">
  <?php if ((isset($_smarty_tpl->tpl_vars['category_name']->value))) {?>
    <div class="al-title"><h1><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['category_name']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</h1></div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['article']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
      <div class="al-each">
        <div class="al-info">
          <a href="/show?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['v']->value['image']) {?>
          <div class="al-img">
            <a href="/show?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
">
              <img src="/uploads/images/<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['image'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" alt="点击阅读文章">
            </a>
          </div>
        <?php }?>
        <div class="al-more">
          <span>作者：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['author'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
 | 发表于：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['created_at'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

           <!-- <?php if ($_smarty_tpl->tpl_vars['user']->value['name'] != '') {?> <a href="/index/collect?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['v']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" class="collect">收藏</a></span><?php }?>-->

        </div>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php } else { ?>
    <div class="al-message">
      该栏目内暂时没有内容。<p><a href="/">点击返回首页</a></p>
    </div>
  <?php }?>
</div>
<div class="pagelist"><?php echo $_smarty_tpl->tpl_vars['page_html']->value;?>
</div>


<?php echo '<script'; ?>
>
  $('.collect').click(function() {
    if (confirm('您确定要收藏此篇文章？')) {
      main.ajaxPost($(this).attr('href'), function(data) {
        alert(data['msg']);
        location.href = '/index/index';
      });
    }
    return false;
  });
<?php echo '</script'; ?>
><?php }
}
