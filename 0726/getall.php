<?php
/**
*作者：孙彐梅
*/
error_reporting(E_ALL^E_NOTICE^E_STRICT^E_DEPRECATED);
include 'Ajax_Page.class.php';
//创建PDO对象
try {
	$pdo=new PDO("mysql:host=localhost;dbname=web13","root","");
}catch (PDOException $e){
	exit($e->getMessage());
}

	//获取总记录数
	$total=$pdo->query("select * from member")->rowCount();
	//实例化分页类
	$page=new Ajax_Page($total);
	$result=$pdo->query("select * from member order by id desc ".$page->limit);
	$data=$result->fetchAll(PDO::FETCH_OBJ);
	//空数组
    $temp=[];
    //数据保存在空数组的第一个元素上
    $temp[0]=$data;
    //分页信息保存在空数组的第二个元素上
    $temp[1]=$page->display(array(0,1,2,3,4));
	if($data[0]){
		echo json_encode($temp);
	}else {
		echo "failed";
	}


/* echo "<pre>";
var_dump($data);
echo "</pre>"; */
// echo "<hr>";
//显示分页内容
// echo $page->display(array(0,1,2,3,4));
?>