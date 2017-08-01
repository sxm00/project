<?php
/**
*作者：孙彐梅
*/
$pdo=new PDO("mysql:host=localhost;dbname=web13","root","");
$pdo->query("set names utf8");
switch ($_POST['index']){
	case 0:
		$tableName="admin";
		break;
	case 1:
		$tableName="admin";
		break;
	case 2:
		$tableName="admin";
		break;		
}
$sql="select * from ".$tableName." order by id desc limit 3";
$result=$pdo->query($sql);
$data=$result->fetchAll(PDO::FETCH_OBJ);
echo json_encode($data);

?>