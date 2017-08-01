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

/* echo "<pre>";
var_dump($_POST);
var_dump($_FILES);
echo "</pre>"; */
//如果点击了提交按钮
if ($_POST['send']){
	$thumbnail=null;
	//is_uploaded_file检测文件是否被上传
	if (is_uploaded_file($_FILES['thumbnail']['tmp_name'])){
		//把上传文件名转换为数组
		$arr=explode(".", $_FILES['thumbnail']['name']);
		$newname=rand(100,999).date('YmdHis').".".$arr[count($arr)-1];
	//	echo $newname;//输出文件的扩展名
		//var_dump($arr) ;
		//echo "ok";
		//新生成的临时文件保存在public文件下的
		$uploads="../../../public/uploads/article";
		//如果目录不存在
		if (!file_exists($uploads)){
			//mkdir：创建目录
			mkdir($uploads);
		}
	//把上传的临时文件生成具体的文件，完成上传
		if (move_uploaded_file($_FILES['thumbnail']['tmp_name'], $uploads."/".$newname)){
			//echo "upload finshed";
			$thumbnail=$newname;
		}
	}else {
// 		如果没有上传就是默认图片
		$thumbnail="default.png";
	}
// 	echo $thumbnail;
	$sql="insert into article(
		title,
		author,
		source,
		lead,
		content,
		addedTime,
		thumbnail
	)values(
		'".$_POST['title']."',
		'".$_POST['author']."',
		'".$_POST['source']."',
		'".$_POST['lead']."',
		'".$_POST['content']."',
		'".date('Y-m-d H:i:s')."',
		'".$thumbnail."'
	)";
	//执行sql语句，成功返回int类型，失败0；
	$result=$pdo->exec($sql);
	if ($result){
		echo "ok";
	}else{
		echo "failed";
	}
	
}
$smarty->display("admin/addArticle.html");
?>