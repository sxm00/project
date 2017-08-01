<?php
/* Smarty version 3.1.30, created on 2017-08-01 21:13:19
  from "E:\xampp\htdocs\root\0726\guestbook\application\views\home\home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59807e6feec958_35955218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ce4e0bdeddbf59b888a38fc1542b2a1a214dc9f' => 
    array (
      0 => 'E:\\xampp\\htdocs\\root\\0726\\guestbook\\application\\views\\home\\home.html',
      1 => 1501593198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59807e6feec958_35955218 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link href='../../../libs/bootstrap/css/bootstrap.css' rel="stylesheet">
<style>
	body{
		background: #dddddd;
	}
	*{
		margin: 0;
		padding: 0;
	}
   .page,table{
   	text-align:center;
   }
   th{
    text-align: center;
    }
	.use_tab{
		width: 90%;
		background: #ffffff;
		margin: 20px auto;
		padding: 10px;
		box-shadow: 1px 5px 4px 5px #a4a4a4;
	}
	#user_nm{
		padding: 5px;
		border: 1px solid black;
		outline: 0;
		margin-top: 10px;
		margin-bottom: 10px;
	}

	.btn-primary {
		color: #ffffff;
		background-color: #e74c3c;
		border-color: #e64433;
	}
	.use_an{
		margin-bottom: 10px;
	}
	.use_an .btn_tj{
		width: 180px;
       margin-left: 50px;
	}
	.table-striped > tbody > tr:nth-of-type(odd) {
		background-color: #e5ffc8;
	}
	.table-striped > tbody > tr:nth-of-type(even) {
		background-color: #e5fffa;
	}
</style>
</head>
<body>
<div class="use_tab">
	<label for="user_nm">名称：</label>
	<input type="text" placeholder="名称" id="user_nm">
	<div class="row use_an">
		<div class="col-sm-12">
			<div class="pull-left">
				<a href='add.php' class="btn btn-primary btn_tj"><span class="glyphicon glyphicon-plus"></span>添加数据</a>
			</div>
			<div class="pull-right">
				<a class="btn btn-md btn-info"><span class="glyphicon glyphicon-search"></span>搜索</a>
				<a class="btn btn-md btn-warning"><span class="glyphicon glyphicon-refresh"></span>重置</a>
			</div>
		</div>
	</div>
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
'  class="btn btn-md btn-success"><span class="glyphicon glyphicon-file"></span>修改</a>
				<a href='delete.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
' class="btn btn-md btn-danger"><span class="glyphicon glyphicon-trash"></span>删除</a>
			</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<!--<tr>-->
			<!--<td colspan="4"><a href='add.php' class="btn btn-default btn-primary"><span class="glyphicon glyphicon-plus"></span>添加数据</a></td>-->
		<!--</tr>-->
	</table>
	<!-- 输出分页 -->
	<div class="page">
		<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>

	</div>

</div>

</body>
</html><?php }
}
