<?php
/* Smarty version 3.1.30, created on 2017-08-01 16:01:00
  from "E:\xampp\htdocs\root\cms\application\views\admin\addArticle.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5980353c4aaa46_54390970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a6dd1fff5fdf7b2a3037708a6c8304da0644ebc' => 
    array (
      0 => 'E:\\xampp\\htdocs\\root\\cms\\application\\views\\admin\\addArticle.html',
      1 => 1501573306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5980353c4aaa46_54390970 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="../../../public/styles/article.css">
<?php echo '<script'; ?>
 src="../../../vendor/ueditor/utf8-php/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../../vendor/ueditor/utf8-php/ueditor.all.js"><?php echo '</script'; ?>
>
</head>
<body>
<dl class="addArticle">
	<form action="" method="post" enctype="multipart/form-data">
	<dt>添加文章</dt>
		<dd><input type="text" name="title" placeholder="title"></dd>
		<dd><input type="text" name="author" placeholder="author"></dd>
		<dd><input type="text" name="source" placeholder="source"></dd>
		<dd><input type="file" name="thumbnail"></dd>
			<dd><textarea name="lead" placeholder="lead"></textarea></dd>
		<dd>
		<!-- <textarea  name="content" placeholder="content"></textarea> -->
			<?php echo '<script'; ?>
 id="container" name="content" type="text/javascript">
				
			<?php echo '</script'; ?>
>
		</dd>
		<dd><input type="submit" value="submit" name="send"></dd>
	</form>
</dl>
</body>
</html>
<!--实例化编辑器-->
<?php echo '<script'; ?>
 type="text/javascript">
  var ue=UE.getEditor('container');
<?php echo '</script'; ?>
><?php }
}
