<?php
/**
*作者：孙彐梅
*/
//导入smarty初始化文件
//include '../../../smarty.init.php';
//var_dump($_GET);
//在查询字符串中，判断action的值；
switch ($_GET['action']){
	case "add":
		add();
		break;
	case "show":
		show();
		break;
	default:
		foo();
		break;
}
//$_GET['action']的值为其他值时触发foo
function foo(){
	echo "foo";
	
}
//触发添加界面
function add(){
// 	echo "hello";
	include '../../../smarty.init.php';
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
$smarty->assign("add",true);
//显示指定的模板
$smarty->display("admin/article.html");
}
//触发显示数据界面
function show(){
	// 	echo "hello";
	include '../../../smarty.init.php';
	//$smarty->assign("show",true);
	echo "show";
	//显示指定的模板
	$smarty->display("admin/article.html");
}

//显示指定的模板
//$smarty->display("admin/article.html");
/* echo HOST;
echo "<pre>";
var_dump($smarty);
echo "</pre>"; */

?>