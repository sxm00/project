<?php
//var_dump($_POST);
$pdo=new PDO("mysql:host=localhost;dbname=web13","root","");
$pdo->query("set names utf8");
switch ($_POST['index']){
	case 0:
		$tableName="admin";
		break;
	case 1:
		$tableName="member";
		break;
	case 2:
		$tableName="news";
		break;
}
$sql="select * from ".$tableName." order by id desc limit 3";
// echo $sql;
//执行查询语句返回结果集
$result=$pdo->query($sql);
//一次性从结果集中获取所有的数据
$data=$result->fetchAll(PDO::FETCH_OBJ);
//把对象组成的数组$data编码为json格式
echo json_encode($data);
//var_dump($data);
?>