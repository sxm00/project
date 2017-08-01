<?php
/**
*作者：孙彐梅
*/
//导入smarty初始化文件
include '../../../smarty.init.php';
try {
	$pdo=new PDO("mysql:host=".HOST.";dbname=".DBNAME."",DBUSER,DBPWD);
	$pdo->query("set names utf8");
}catch (PDOException $e){
	exit($e->getMessage());
}
//var_dump($pdo);
$sql="select * from article order by id desc";
$result=$pdo->query($sql);
$data=$result->fetchAll(PDO::FETCH_OBJ);
//编码为json字符串，返回给前台
echo json_encode($data);
?>