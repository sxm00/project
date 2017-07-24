<?php
/**
*作者：孙彐梅
*/
session_start();
//var_dump($_SESSION);//打印captcha.php中的验证码$_SESSION['captcha']=$temp;
if($_POST['send']){
/* 	echo "<pre>";
	var_dump($_POST);//打印输入框里输入的值
	var_dump($_SESSION);	//打印验证码的值
	echo "</pre>"; */
	if (strtolower($_POST['code'])==strtolower($_SESSION['captcha'])){//把输入的值和验证码的值都转换为小写，如果相等就输出ok；
		echo "ok";
	}else {
		echo "failed";
	}
}


?>