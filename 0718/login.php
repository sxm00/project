<?php
/* echo "<pre>";
var_dump($_REQUEST); //$_REQUES可以同时获取get,post；
//var_dump($_GET);//只能获取get；
echo "</pre>";

echo "<pre>";
var_dump($_FILES); //$_FILES输出上传文件数据；
echo "</pre>"; */

/*文件输出网页显示
 * array(1) {
  ["pic"]=> //key是input的name值
  array(5) {
    ["name"]=> //上传前的名字
    string(7) "mty.jpg"
    ["type"]=>//类型
    string(10) "image/jpeg"
    ["tmp_name"]=>//文件的临时名字
    string(24) "E:\xampp\tmp\phpBCDC.tmp"
    ["error"]=>
    int(0)
    ["size"]=>
    int(12243)
  }
}  */


//把文件上传到服务器，存储在你的文件夹里
/* if ($_POST['send']){
	move_uploaded_file($_FILES['pic']['tmp_name'], $_FILES['pic']['name']);
	//$_FILES['pic']['tmp_name']上传后的临时名字；$_FILES['pic']['name']上传重新命名的名字用的是上传之前的名字；
} */
//把文件上传到服务器，存储在你的文件夹里.多加了个if判断做提示，上传成功页面显示ok，上传失败显示failed及错误信息
/* if ($_POST['send']){
	if (move_uploaded_file($_FILES['pic']['tmp_name'], $_FILES['pic']['name'])){
		echo "ok";
	}else {
		echo "failed".$_FILES['pic']['error'];
	}
} */
//判断是否点击了提交按钮；
/* if ($_POST['send']){
	//is_uploaded_file判断文件是否被上传,($_FILES['pic']['tmp_name'])判断是否有临时文件生产
	if (is_uploaded_file($_FILES['pic']['tmp_name'])){
		$orignslName=$_FILES['pic']['name']; //获取原来的文件名
		echo "<pre>";
		var_dump(explode("0", $orignslName)) ;//把文件名转换为数组的形式输出；explode(".", $orignslName)把字符串转换为数组，用“0”作为分隔符
		echo "</pre>";
	}else {
	    echo "0";	
	}
} */

if ($_POST['send']){
	//is_uploaded_file判断文件是否被上传,($_FILES['pic']['tmp_name'])判断是否有临时文件生产
	if (is_uploaded_file($_FILES['pic']['tmp_name'])){
		$orignslName=$_FILES['pic']['name']; //获取原来的文件名
		$arr=explode(".", $orignslName);
	/* 	echo rand(100,999).date("YmdHis").".".$arr[count($arr)-1];//生产一个新的扩展名
		//读取这个数组的最后一个元素；无论什么文件名都可以获取扩展名;rand(100,999)随机数；date("YmdHis")日期；"."分隔符；$arr[count($arr)-1]文件扩展名 */
		$newname=rand(100,999).date("YmdHis").".".$arr[count($arr)-1];
		if (move_uploaded_file($_FILES['pic']['tmp_name'], $newname)){//随机命名的文件上传到服务器
			echo  "ok";
		}else {
			echo "failed".$_FILES['pic']['error'];
		}
	}else {
		echo "0";
	}
}

?>