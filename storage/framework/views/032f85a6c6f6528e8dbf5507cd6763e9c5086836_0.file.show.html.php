<?php
/* Smarty version 4.1.0, created on 2022-06-12 16:35:14
  from 'E:\PHP\cms\resources\views\sub\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62a5a542403cf0_83389873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '032f85a6c6f6528e8dbf5507cd6763e9c5086836' => 
    array (
      0 => 'E:\\PHP\\cms\\resources\\views\\sub\\show.html',
      1 => 1655022910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a5a542403cf0_83389873 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="as">
  <?php if ($_smarty_tpl->tpl_vars['article']->value) {?>
    <div class="as-title"><h1><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1></div>
    <div class="as-row">
      <span>栏目：
          <?php if ((isset($_smarty_tpl->tpl_vars['category_name']->value))) {?>
            <a href="/show?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['cid'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
          <?php } else { ?>
            无
          <?php }?>
        </span>
      <span>作者：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['author'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
      <span>发表时间：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['created_at'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
      <span>阅读：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['views'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
次</span>
    </div>
    <div class="as-content"><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</div>

  <div class="as-comment">
    <p class="as-comment-title">评论:</p>
      <?php ob_start();
if (!$_smarty_tpl->tpl_vars['user']->value) {
$_prefixVariable1 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable1, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

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
echo mb_convert_encoding(htmlspecialchars($_prefixVariable2, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

      <!-- 用户登录情况下显示的HTML代码开始 -->
      <div class="comment-area" >
        <form action="/index/savecomment/?id=<?php ob_start();
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
$_prefixVariable3 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable3, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" class="coment">
          <textarea name="comment" id="comment" cols="250" rows="10" placeholder="我有话说" style="width: 800px;height: 50px"></textarea>
          <input type="submit" value="发表评论" id="btn-comment">
        </form>
      </div>

      <!-- 用户登录情况下显示的HTML代码结束 -->
      <?php ob_start();
}
$_prefixVariable4 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable4, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

    </div>

  <!-- 评论列表区域开始 -->
  <div id="article-comment-list">
    <?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_prefixVariable5 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable5, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

    <div class="article-comment-item" style="padding: 12px 0 10px; border-top:solid 1px #e8e8e8; display: block" >
      <div class="comment-content">
        <div class="username">
          <a href="#"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['username'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>:
        </div>
        <div class="comment-text">
          <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['content'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

          <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] == $_smarty_tpl->tpl_vars['value']->value['user_id']) {?><a href="/index/deleteComment?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" onclick=" return confirm('是否删除?')"> 删除</a><?php }?>
        </div>
        <div class="comment-time" style="margin-left: 682px">

          <i class="icon-time"></i>
          <?php echo mb_convert_encoding(htmlspecialchars(date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['create_at']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        </div>
      </div>
    </div>
    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable6 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable6, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

  </div>

  </div>



    <div class="as-change">
      <span>上一篇：
        <?php if ($_smarty_tpl->tpl_vars['article_prev']->value) {?>
          <a href="/show?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article_prev']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
          title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article_prev']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article_prev']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
        <?php } else { ?>
          无
        <?php }?>
      </span>
      <span>下一篇：
        <?php if ($_smarty_tpl->tpl_vars['article_next']->value) {?>
          <a href="/show?id=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article_next']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
          title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article_next']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article_next']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
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
