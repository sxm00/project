<?php
/* Smarty version 3.1.30, created on 2017-08-01 11:46:59
  from "E:\xampp\htdocs\root\cms\application\views\admin\article.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597ff9b35bf5d3_09376597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a58ca98fdbe090321afc2ec7272ae5405e0e99e1' => 
    array (
      0 => 'E:\\xampp\\htdocs\\root\\cms\\application\\views\\admin\\article.html',
      1 => 1501559216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597ff9b35bf5d3_09376597 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<!-- 判断$add是否为真，为真时显示form -->
<?php if ($_smarty_tpl->tpl_vars['add']->value) {?>
	<form action="" method="post">
		<input type="text" name="title" placeholder="title"><br>
		<input type="text" name="author" placeholder="author"><br>
		<input type="text" name="source" placeholder="source"><br>
		<input type="text" name="lead" placeholder="lead"><br>
		<input type="file" name="thumbnail" placeholder="thumbnail"><br>
		<input type="text" name="content" placeholder="content"><br>
		<input type="submit" value="submit" name="send">
	</form>
<?php }?>
<a href='?action=add'>添加文章</a>

</body>
</html><?php }
}
