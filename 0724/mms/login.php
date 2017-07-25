<?php
/**
*作者：孙彐梅
*/
include 'common.php';
//如果cookie有效，就跳转到首页，无需登录
  if ($_COOKIE['username']){
	$_SESSION['admin']=$_COOKIE['username'];
	header("location:getAll.php");
}  
//点击登录
if ($_POST['send']){
	/* echo "<pre>";
	var_dump($_POST);
	echo "</pre>"; */
	if (strtolower($_POST['code'])!=strtolower($_SESSION['captcha'])){
		echo "<script>alert('验证码错误');location.href='login.php'</script>";
			return  false;	
	} 
	$sql=" select * from admin where username='".$_POST['username']."'
		and pwd='".md5($_POST['pwd'])."'";//写SQL 语句把用户名和密码在数据库中查询
	$result=$pdo->query($sql);
	$oneUser=$result->fetchAll(PDO::FETCH_OBJ);
	//echo $sql;
	if ($oneUser[0]){
		if ($_POST['oneweek']==1){
			setcookie("username",$_POST['username'],time()+3600*24*7);
		}else {
			setcookie("username",$_POST['username']);
		}
		//跳转到首页
		header("location:getAll.php");
		//把用户对象保存在$_SESSION;
		$_SESSION['admin']=$oneUser[0];
	
	}else {
		//弹出信息
		echo "<script>alert('用户名或密码错误');location.href='login.php'</script>";
	}
}
?>
<style>
dl,dt,dd{
margin:0;
padding:0;
}
	.login{
	border:1px solid #ddd;
	width:220px;
	height:200px;
	padding:5px;
	position:absolute;
	}
	.login dt{
	text-algin:center;
	}
	.login dd{
	margin:5px auto;
	}
	.login dd input{
	width:100%;
	}
	.login .code{
	width:50px;
	}
	.login .oneweek{
	width:20px;
	}
</style>
<dl class="login">
<form action="" method="post">
  <dt> 欢迎登录</dt>  
  <dd> <input type="text" name="username"></dd>
  <dd> <input type="text" name="pwd"></dd>
  <dd> 
  <input type="text" name="code" class="code">
  <img alt="" src="captcha.php">
  </dd>
  <dd><input type="checkbox" name="oneweek" class="oneweek" value="1">一周内不用登录</dd>
  <dd><input type="submit" name="send" value="登录" class="loginBtn"></dd>
  </form>
</dl>

 <script src="Tools.js"></script>
 <script>
/* var cen=document.querySelector(".login");
function center(element){
	element.style.left=((getWindowSize().width-element.offsetWidth)/2+getScrollSize().left)+"px";
	element.style.top=((getWindowSize().height-element.offsetHeight)/2+getScrollSize().top)+"px";
}
     center(cen);
 */
 center(document.querySelector(".login"));
 </script>

	
