<?php
/**
*作者：孙彐梅
*/
include 'common.php';//把common.php导入进来；就是下面注释掉的try catch语句；
include 'checklogin.php';
//删除页面
/* try {
	$pdo=new PDO("mysql:host=localhost;dbname=web13","root","");
}catch (PDOException $e){ //PDOException内置类
	//$e=new;
	echo "链接mysql服务器，".$e->getMessage();
}
$pdo->query("set names utf8");//pdo执行sql语句；“set names utf8”设置操作数据库的字符集； */
if ($_GET['id']){
	$sql="delete from member where id=".$_GET['id']."";
// 	echo $sql;
	$result=$pdo->exec($sql);//赋值给$result
	//如果删除成功，直接跳转到首页；
	if ($result){//判断$result为真的话执行getAll.php
		header("location:getAll.php");
	}else {
		echo "<script>alert('删除失败');location.href='getAll.php'</script>";
	}
}else {
	//防止用户直接访问getAll.php
	header("location:getAll.php");//如果id不存在就跳转到getAll页面
}
?>