<?php
/* Smarty version 3.1.30, created on 2017-07-25 03:53:06
  from "E:\xampp\htdocs\root\0724\mms2\templates\hello.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5976a48253a397_66147355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdf7ab02bc507a80351abde97ee4da2aa0631112' => 
    array (
      0 => 'E:\\xampp\\htdocs\\root\\0724\\mms2\\templates\\hello.html',
      1 => 1500947583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5976a48253a397_66147355 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link href="public/styles/hello.css" rel="stylesheet">
</head>
<body>
<h1><?php ob_start();
echo $_smarty_tpl->tpl_vars['username']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</h1>
<!-- <img src="public/images/003.jpeg">路径以php文件为参考路径
<div></div> -->
</body>
</html><?php }
}
