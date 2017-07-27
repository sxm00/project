<?php
/* Smarty version 3.1.30, created on 2017-07-25 18:41:03
  from "E:\xampp\htdocs\root\0725\guestbook\application\views\home\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5977203f0a7836_11488342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cd8264e070e48be215f85af205bded19d8bbc5e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\root\\0725\\guestbook\\application\\views\\home\\home.html',
      1 => 1500979260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5977203f0a7836_11488342 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link href='../../../libs/bootstrap/css/bootstrap.css' rel="stylesheet">
<style>
   .page,table{
   	text-align:center;
   }
   th{
    text-align: center;
    }
</style>
</head>
<body>
<table  class="table table-bordered table-striped table-hover ">
	 <tr>
		 <th>用户名</th>
		 <th>用户邮箱</th>
		 <th>注册时间</th>
		 <th>操作</th>
	 </tr>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?><!-- $key下标>$value值 --> <!--<?php echo $_smarty_tpl->tpl_vars['value']->value->username;?>
   把username赋值给 $value -->
	 <tr>
		 <td><?php echo $_smarty_tpl->tpl_vars['value']->value->username;?>
</td>
		 <td><?php echo $_smarty_tpl->tpl_vars['value']->value->email;?>
</td>
		 <td><?php echo $_smarty_tpl->tpl_vars['value']->value->regTime;?>
</td>
		 <td>
			 <a href='update.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
'>修改</a>
			 <a href='delete.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
'>删除</a>
		 </td>
	 </tr>
 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

 	 <tr>
	 <td colspan="4"><a href='add.php'>添加数据</a></td>
	 </tr>
</table>
<!-- 输出分页 -->
<div class="page">
	<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>

</div>
</body>
</html><?php }
}
