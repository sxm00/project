<?php
/**
*作者：孙彐梅
*/
//导入smarty类
include 'libs/Smarty.class.php';
//实例化smarty类
$smarty=new Smarty();
/* echo "<pre>";
var_dump($smarty);
echo "</pre>"; */
//赋值
$smarty->assign("username","tom");
//显示指定的静态页面，默认路径是templates;
$smarty->display("hello.html");
?>