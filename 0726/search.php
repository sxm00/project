<?php
/**
*作者：孙彐梅
*/
error_reporting(E_ALL^E_NOTICE^E_STRICT^E_DEPRECATED);
// var_dump($_POST);
try{
	$pdo=new PDO("mysql:host=localhost;dbname=web13","root","");
}catch (PDOException $e){
	exit($e->getMessage());
}
$pdo->query("set names utf8");
if ($_POST['action']=="search"){
	//倒叙查询含有$_POST['keyword']的值
	$sql="SELECT * FROM member WHERE username like '%".$_POST['keyword']."%' order by id DESC LIMIT 8";
// 	echo $sql;
	$result=$pdo->query($sql);
	$data=$result->fetchAll(PDO::FETCH_OBJ);
	if($data[0]){
		echo json_encode($data);
	}else {
		echo "failed";
	}
}

?>