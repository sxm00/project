<?php
session_start();//开启session；
error_reporting(E_ALL^E_NOTICE);
if ($_SESSION['username']){ //判断username是否有值
	echo "欢迎".$_SESSION['username']."登录";
	echo ",<a href='member.php?action=logout'>注销</a>";
}else {
	echo "未登录";
}
//判断是否点击注销
if($_GET['action']){
	//echo $_POST['username'];
	unset($_SESSION['username']);
	//js刷新页面
	echo "<script>location.href='member.php';</script>";
}
//是否点击提交按钮
if($_POST['send']){
	//echo $_POST['username'];
	$_SESSION['username']=$_POST['username'];
	//js刷新页面
	echo "<script>location.href='member.php';</script>";
}

?>

<form action="" method="post"> 
  <input type="text" name="username"> <br>
  <input type="submit" value="submit" name="send">
</form>