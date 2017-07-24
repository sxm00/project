<?php
/**
*作者：孙彐梅
*/
include 'common.php';//把common.php导入进来；就是下面注释掉的try catch语句；
include 'checklogin.php';
//添加数据
/* try {
	$pdo=new PDO("mysql:host=localhost;dbname=web13","root","");
}catch (PDOException $e){ //PDOException内置类
	//$e=new;
	echo "链接mysql服务器，".$e->getMessage();
}
$pdo->query("set names utf8");//pdo执行sql语句；“set names utf8”设置操作数据库的字符集； */
//var_dump($_POST);
if ($_POST['send']){
	$searchSql="select * from member where username='".$_POST['username']."'";//设置$sql语句 把原有的username加入进来
	$searchResult=$pdo->query($searchSql);
	$oneUser=$searchResult->fetchAll(PDO::FETCH_OBJ);
// 	var_dump($oneUser[0]);
	if ($oneUser[0]){//判断用户名已经存在，就弹出请重试，
		echo "<script>alert('用户名已经存在，请重试！');history.go(-1);</script>";
		return false;
	}
	//exit();//终止代码执行
	//添加数据
	$sql="insert into member(
	username,
	pwd,
	email,
	regTime
)values(
	'".$_POST['username']."',
	'".md5($_POST['pwd'])."',
	'".$_POST['email']."',
	'".date('Y-m-d H:i:s')."'
	)";
//echo $sql;
	$result=$pdo->exec($sql);
	if ($result){
		//echo "ok";
		echo "<script>
				alert('数据添加成功');
     			location.href='getAll.php';
			 </script>";
	}else {
		echo "failed";
	}
}

?>
    <style>
        .reg{
            border:1px solid #56a6f1;
            position:absolute;
            padding:15px;
            left:0;
            right:0;
            top:0;
            bottom:0;
            margin:auto;
            width:205px;
            height:306px;
            box-shadow:0 0 5px #56a6f1;
            border-radius:5px;
        }
        .reg input{
            margin-top:30px;
            width:95%;
            border:1px solid #56f1e1;
            border-radius:5px;
            padding:5px;
            outline:0; ;
        }
        .btn{
            background:#56f1e1;
        }
        #tip1,#tip2,#tip3{
            position: absolute;
            display: block;
            width: 87%;
            height: 30px;
            border: 1px solid red;
            border-radius:5px;
            display: none;
            color: red;
            background: #7cf2ca;
            text-align: center;
            font-size: 13px;
        }
          label{
              position: relative;
              top: 5px;
          }
    </style>
<form action="" method="post" class="reg" id="form">
    <label for="username">用户名：</label>
        <span id="tip1"></span>
    <input type="text" name="username" placeholder="请输入用户名" id="user"> <br>
    <label for="username">密码：</label>
        <span id="tip2"></span>
   <input type="password" name="pwd" placeholder="请输入密码" id="pwd"> <br>
    <label for="username">邮箱：</label>
         <span id="tip3"></span>
    <input type="text" name="email" placeholder="请输入邮箱"  class="email" > <br>
        <input type="submit" value="立即提交" name="send" class="addBtn" >
</form>
<script src="js封装/jquery-3.2.1.min.js"></script>
<script src="Tools.js"></script>
<script>
  var addBtn=document.querySelector(".addBtn");
  var email=document.querySelector(".email");
//   console.log(addBtn);
addBtn.addEventListener("click",function(evt){
	 if(!validate_email(email.value)){
            alert("failed");
            evt.preventDefault();//阻止默认动作和return false一样;
			}
});









</script>