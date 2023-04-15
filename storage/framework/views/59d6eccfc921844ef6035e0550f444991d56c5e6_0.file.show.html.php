<?php
/* Smarty version 4.3.1, created on 2023-04-15 12:49:30
  from 'D:\chenjunhui\chencms\cms\resources\views\sub\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643a2cdadff0f7_70997472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59d6eccfc921844ef6035e0550f444991d56c5e6' => 
    array (
      0 => 'D:\\chenjunhui\\chencms\\cms\\resources\\views\\sub\\show.html',
      1 => 1681534161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643a2cdadff0f7_70997472 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="as">
  <?php if ($_smarty_tpl->tpl_vars['article']->value) {?>
    <div class="as-title"><h1><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</h1></div>
    <div class="as-row">
      <span>分类：
          <?php if ((isset($_smarty_tpl->tpl_vars['categorychild_name']->value))) {?>
            <a href="/show?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article']->value['cid'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['categorychild_name']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a>
          <?php } else { ?>
            无
          <?php }?>
        </span>
      <span>作者：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article']->value['author'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</span>
      <span>发表时间：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article']->value['created_at'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</span>
      <span>阅读：<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article']->value['views'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
次</span>
    </div>
    <div class="as-content"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</div>

  <div class="as-comment">
    <p class="as-comment-title">评论:</p>
      <?php ob_start();
if (!$_smarty_tpl->tpl_vars['user']->value) {
$_prefixVariable1 = ob_get_clean();
echo htmlentities(mb_convert_encoding((string)$_prefixVariable1, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

      <!-- 用户没有登录的情况下显示的HTML代码段开始 -->
      <div class="no-login-area" style="width: 800px;text-align: center;border: solid red 1px ;height: 50px">
        <div class="no-login-tip"   style="margin-top: 16px">
          <a href="/admin/login/index">登录</a>
          后参与评论
        </div>
      </div>
      <!-- 用户没有登录的情况下显示的HTML代码段结束 -->
      <?php ob_start();
} else {
$_prefixVariable2 = ob_get_clean();
echo htmlentities(mb_convert_encoding((string)$_prefixVariable2, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

      <!-- 用户登录情况下显示的HTML代码开始 -->
      <div class="comment-area" >
        <form action="/index/savecomment/?id=<?php ob_start();
echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);
$_prefixVariable3 = ob_get_clean();
echo htmlentities(mb_convert_encoding((string)$_prefixVariable3, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="coment">
          <textarea name="comment" id="comment" cols="250" rows="10" placeholder="我有话说" style="width: 800px;height: 50px"></textarea>
          <input type="submit" value="发表评论" id="btn-comment">
        </form>
      </div>

      <!-- 用户登录情况下显示的HTML代码结束 -->
      <?php ob_start();
}
$_prefixVariable4 = ob_get_clean();
echo htmlentities(mb_convert_encoding((string)$_prefixVariable4, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

    </div>

  <!-- 评论列表区域开始 -->
  <div id="article-comment-list">
    <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_prefixVariable5 = ob_get_clean();
echo htmlentities(mb_convert_encoding((string)$_prefixVariable5, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

    <div class="article-comment-item" style="padding: 12px 0 10px; border-top:solid 1px #e8e8e8; display: block" >
      <div class="comment-content">
        <div class="username">
          <a href="#"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['value']->value['username'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a>:
        </div>
        <div class="comment-text">
          <?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['value']->value['content'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

          <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] == $_smarty_tpl->tpl_vars['value']->value['user_id']) {?><a href="/index/deleteComment?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['value']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
" onclick=" return confirm('是否删除?')"> 删除</a><?php }?>
        </div>
        <div class="comment-time" style="margin-left: 682px">

          <i class="icon-time"></i>
          <?php echo htmlentities(mb_convert_encoding((string)date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['create_at']), 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

        </div>
      </div>
    </div>
    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable6 = ob_get_clean();
echo htmlentities(mb_convert_encoding((string)$_prefixVariable6, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>

  </div>

  </div>



    <div class="as-change">
      <span>上一篇：
        <?php if ($_smarty_tpl->tpl_vars['article_prev']->value) {?>
          <a href="/show?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article_prev']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"
          title="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article_prev']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article_prev']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a>
        <?php } else { ?>
          无
        <?php }?>
      </span>
      <span>下一篇：
        <?php if ($_smarty_tpl->tpl_vars['article_next']->value) {?>
          <a href="/show?id=<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article_next']->value['id'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"
          title="<?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article_next']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['article_next']->value['title'], 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
</a>
        <?php } else { ?>
          无
        <?php }?>
      </span>
    </div>
  <?php } else { ?>
    <div class="as-message">
      您查看的文章不存在。<p><a href="/">点我返回首页</a></p>
    </div>
  <?php }?>
</div>


<?php echo '<script'; ?>
>
  //main.menuActive('comment');

  //main.menuActive('index');
 /* main.ajaxForm('.coment',function (data) {
    alert(data['msg']);
    location.href = '/index/show/?id='+data['msg'];
  })*/

 /* var article_id = $('#article_id').val();

  function setComment(){
    if($("[name='content']").val().length == 0){
      alert("内容不能为空");
      return false;
    }
    $.post({
      url:"/admin/comment/setComment",
      data:$(".cont").serialize(),
      success:function(data){
        if(data.code == 1) {
          location.href = "/show?id="+article_id;
        }else{
          alert(data.msg);
        }
      }
    });
  }*/

<?php echo '</script'; ?>
><?php }
}
