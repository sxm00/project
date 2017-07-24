<?php
/**
*作者：孙彐梅
*/
//开启session
session_start();
//错误处理
error_reporting(E_ALL^E_NOTICE^E_STRICT);
//设置时区
date_default_timezone_set("PRC");
try {
	$pdo=new PDO("mysql:host=localhost;dbname=web13","root","");
}catch (PDOException $e){ //PDOException内置类
	//$e=new;
	echo "链接mysql服务器，".$e->getMessage();
	/* 	echo "<pre>";
	 var_dump($e);
	 echo "</pre>"; */
}
$pdo->query("set names utf8");//pdo执行sql语句；“set names utf8”设置操作数据库的字符集；

?>