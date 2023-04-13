<?php
/* Smarty version 4.1.0, created on 2022-06-07 17:20:57
  from 'E:\PHP\cms\resources\views\sub\detail.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629f1879bca6c1_30581566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d6ad8359794d8778e4c490dc4726998b4c0dc6b' => 
    array (
      0 => 'E:\\PHP\\cms\\resources\\views\\sub\\detail.html',
      1 => 1654593631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/public/detail_header.html' => 1,
    'file:user/public/footer.html' => 1,
  ),
),false)) {
function content_629f1879bca6c1_30581566 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Php Study学习平台</title>
		<link rel="stylesheet" href="/styles/reset.css">
		<link rel="stylesheet" href="/styles/fonts.css">
		<link rel="stylesheet" href="/styles/coding.css">
		<link type="image/x-icon" href="/uploads/favicon.ico" rel="icon">
		<link rel="stylesheet" href="/static/common/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="/static/common/toastr.js/2.1.4/toastr.min.css">
		<?php echo '<script'; ?>
 src="/static/common/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/static/common/toastr.js/2.1.4/toastr.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/static/admin/js/main.js"><?php echo '</script'; ?>
>
	</head>
	<body>
<!--	//<?php $_smarty_tpl->_subTemplateRender("file:user/public/detail_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>-->
	<!-- 文章主要区域开始 -->
	<div id="article-main">
		<!-- 左侧文章内容区域开始 -->
		<div id="article-content">
			<h3 id="article-subject"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['subject'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h3>
			<div id="article-info">
				<div class="author-mini-head">
					<span>发表于 <?php echo mb_convert_encoding(htmlspecialchars(date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['article']->value['created_at']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
			</div>

				<div class="view-info">
					<i class="icon-eye-open"></i>
					<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['browse_times'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

				</div>
				<div class="comment-info">
					<i class="icon-comment"></i>
					<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['comment_number'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

				</div>
			</div>
			<!-- 文章正文开始 -->
			<div id="article-detail">
				<!-- 自己添加 width='90%' 保证图片不会超出去 -->
				<p><img src="/uploads/images/<?php echo mb_convert_encoding(htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['article']->value['subject_picture'] ?? null)===null||$tmp==='' ? 'logo.png' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="90%" alt=""></p>
				<?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

			</div>
			<!-- 文章正文结束 -->
			<!-- 评论表单区域开始 -->
			<div id="article-comment">
				<div id="article-comment-header">
					<div class="comment-title"><i class="icon-comment"></i>&nbsp;我来说两句</div>
					<div class="comment-count">
						<a href="#"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['comment_number'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
						条评论
					</div>
				</div>

				<div id="article-comment-body">
					<?php ob_start();
if (!$_smarty_tpl->tpl_vars['user']->value) {
$_prefixVariable1 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable1, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

					<!-- 用户没有登录的情况下显示的HTML代码段开始 -->
					<div class="no-login-area">
						<div class="no-login-tip">
							<a href="/login/index">登录</a>
							后参与评论
						</div>
					</div>
					<!-- 用户没有登录的情况下显示的HTML代码段结束 -->
					<?php ob_start();
} else {
$_prefixVariable2 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable2, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

					<!-- 用户登录情况下显示的HTML代码开始 -->
					<div class="comment-area">
						<form action="/index/comment?id=<?php ob_start();
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['article']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
$_prefixVariable3 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable3, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" class="edit">
							<textarea name="comment" id="comment" cols="30" rows="10" placeholder="我有话说"></textarea>
							<input type="submit" value="发表评论" id="btn-comment">
						</form>
					</div>

					<!-- 用户登录情况下显示的HTML代码结束 -->
					<?php ob_start();
}
$_prefixVariable4 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable4, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

				</div>
			</div>
			<!-- 评论表单区域结束 -->
			<!-- 评论列表区域开始 -->
			<div id="article-comment-list">
				<?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_prefixVariable5 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable5, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

				<div class="article-comment-item">
					<div class="comment-content">
						<div class="username">
							<a href="#"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['username'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>:
						</div>
						<div class="comment-text">
							<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['comment'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

						</div>
						<div class="comment-time">
							<i class="icon-time"></i>
							<?php echo mb_convert_encoding(htmlspecialchars(date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['created_at']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

						</div>
					</div>
				</div>
				<?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable6 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable6, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

			</div>
			<!-- 评论列表区域结束 -->
		</div>
		<!-- 左侧文章内容区域结束 -->
		<!-- 左侧侧边框区域开始 -->
		<div id="article-sidebar">
			<div class="common-slide">
				<div class="common-slide-title">热门标签</div>
				<ul>
					<?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cates']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_prefixVariable7 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable7, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

					<li class="blog-hot-tags">
						<a href="/index/index?id=<?php ob_start();
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
$_prefixVariable8 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable8, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['category_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
					</li>
					<?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable9 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable9, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

				</ul>
			</div>
			<div class="common-slide">
				<div class="common-slide-title">博主推荐</div>
				<div class="blogger-recommend-list">
					<?php ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admins']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_prefixVariable10 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable10, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

					<div class="blogger-recommend-item">
						<a href="#" class="blogger-recommend-author-image">
							<img src="/uploads/image.jpg" alt="">
						</a>
						<div class="blogger-recommend-author-info">
							<h3><a href="#"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['username'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></h3>
							<div class="blogger-recommend-detail">
								<span>经验贴：<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['c'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
篇</span>
							</div>
						</div>
					</div>
					<?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable11 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_prefixVariable11, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

				</div>
			</div>
		</div>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:user/public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</body>
<?php echo '<script'; ?>
>
	main.menuActive('index');
	main.ajaxForm('.edit',function () {
		window.location.reload()
	})
<?php echo '</script'; ?>
>
</html><?php }
}
