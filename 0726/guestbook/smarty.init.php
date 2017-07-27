<?php
/**
*作者：孙彐梅
*配置smarty
*/
//开启session
session_start();
//设置错误报告的级别
error_reporting(E_ALL^E_NOTICE^E_STRICT^E_DEPRECATED);
//设置默认时区
date_default_timezone_set("PRC");
/* echo __FILE__;//输出文件的名称和完整路径
echo dirname(__FILE__);//文件所在的路径 不包含文件名称； */
define("ROOT", dirname(__FILE__));
//echo ROOT;//输出项目的根路径；
//导入smarty 类
include ROOT.'/libs/smarty/smarty.class.php';
//导入配置文件
include ROOT.'/application/configs/config.php';
$smarty=new Smarty();
/* echo "<pre>";
var_dump($smarty);
echo "</pre>";//输出$smarty； */
//自定义模板目录
$smarty->template_dir=ROOT."/application/views";
//自定义编译目录
$smarty->compile_dir=ROOT."/application/run";
?>