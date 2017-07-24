<?php
error_reporting(E_ALL^E_NOTICE);
//echo time();//获取当前的时间戳;
//setcookie("username","张三",time()+60*60*24*7);  //setcookie设置cookie；time()+60*60*24*7是cookie保存一周的时间；
//var_dump($_COOKIE);
//判断cookie是否有值；
if ($_COOKIE['username']){
	echo "不用登录".$_COOKIE['username'];
}else {
	echo "需要登录";
}
//判断是否点击提交按钮
if ($_POST['send']){
	//输出var_dump($_POST);查看$_POST['oneweek']的值是1；value="1"是在form表中给予的；
	/* echo "<pre>";
	 var_dump($_POST);
	 echo "</pre>"; */
	//判断$_POST['oneweek']的值等于1的时候显示ok；不等于1的时候显示failed；
	if ($_POST['oneweek']=="1"){ //选择1周内不用登录
		//echo "ok";
		$name0=$_POST['username'];
		setcookie("username","$name0",time()+60*60*24*7);
	}else {//未选择1周内不用登录
		//echo "failed";
		setcookie("username","$name0");
	}
	//页面刷新
	echo "<script>location.href='cookie.php';</script>";
}
?>

<form method="post" action="denglu.php">
    账号：
    <input type="text" name="username"><br/>
    <input type="checkbox" name="oneweek" value="1">
    <label for="oneweek">一周内不用登录</label><br>
    <input type="submit" value="登录" name="send">
    <a href="./register.php">没有账号，注册</a>
</form>