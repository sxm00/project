<?php
/* Smarty version 3.1.30, created on 2017-07-24 11:29:10
  from "E:\xampp\htdocs\0724\mms2\templates\hello.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5975bde6a72b05_14232098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6b9f21fa10f87bef62d92d8a48db58142493503' => 
    array (
      0 => 'E:\\xampp\\htdocs\\0724\\mms2\\templates\\hello.html',
      1 => 1500888548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5975bde6a72b05_14232098 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1><?php ob_start();
echo $_smarty_tpl->tpl_vars['username']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</h1>
<img src="public/images/003.jpeg"><!--路径以php文件为参考路径-->
</body>
</html><?php }
}
