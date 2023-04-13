<?php
/* Smarty version 4.1.0, created on 2022-06-09 20:10:19
  from 'E:\PHP\cms\resources\views\admin\comment.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a1e32b23ac85_19377580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fde8c5271a39b41c3cf4599e85d62ef0d1cbe82' => 
    array (
      0 => 'E:\\PHP\\cms\\resources\\views\\admin\\comment.html',
      1 => 1654776582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a1e32b23ac85_19377580 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <div class="main-title">
        <h2>评论管理</h2>
    </div>
    <!--  <div class="main-section form-inline">-->
    <!--    <a href="/admin/category/edit" class="btn btn-success">+ 新增</a>-->
    <!--  </div>-->
    <div class="main-section">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>评论人</th>
                <th>标题</th>
                <th>评论内容</th>

                <th>评论时间</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <tr>

                <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['username'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['content'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>

                <td><?php echo mb_convert_encoding(htmlspecialchars(date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['create_at']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>

                <td>
                    <a href="/admin/comment/delete?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="j-del text-danger">删除</a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
            <tr>
                <td colspan="6" class="text-center">列表为空</td>
            </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</div>
<?php echo '<script'; ?>
>
    main.menuActive('comment');
    $('.j-del').click(function () {
        let res =  confirm('您确定要删除此项？');
        if (res) {
            main.ajaxPost($(this).attr('href'), function () {
                main.contentRefresh();
            });
        }
        return false;
    });
<?php echo '</script'; ?>
><?php }
}
