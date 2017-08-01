<?php
/**
*作者：孙彐梅
*初始化smarty
*/
//开启session
session_start();
//设置错误报告,只显示除了notice strict deprecated外的错误；
error_reporting(E_ALL^E_NOTICE^E_DEPRECATED^E_STRICT);
//设置默认时区
date_default_timezone_set("PRC");
//__FILE__：文件名及文件所在的完整目录；dirname(__FILE__):文件所在的完整目录；
// echo dirname(__FILE__);
//声明了常量ROOT：项目根目录
define("ROOT", dirname(__FILE__));
//导入配置文件
include ROOT.'/application/configs/config.php';
// echo ROOT;
include ROOT."/vendor/smarty/libs/Smarty.class.php";
$smarty=new Smarty();
/* echo "<pre>";
var_dump($smarty);
echo "</pre>"; */
//template_dir:smarty的模板目录，默认是templates；
//compile_dir:编译目录，默认是templates_c
//自定义模板目录
$smarty->template_dir=ROOT."/application/views";
$smarty->compile_dir=ROOT."/application/runtime";
// echo HOST;


?>