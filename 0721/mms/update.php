<?php
/**
*作者：孙彐梅
*/
//修改页面
include 'common.php';//把common.php导入进来；就是下面注释掉的try catch语句；
/* try {
	$pdo=new PDO("mysql:host=localhost;dbname=web13","root","");
}catch (PDOException $e){ //PDOException内置类
	//$e=new;
	echo "链接mysql服务器，".$e->getMessage();
}
$pdo->query("set names utf8");//pdo执行sql语句；“set names utf8”设置操作数据库的字符集； */
//判断如果没有id直接跳转到getAll页面
if ($_GET['id']){//如果有id执行if
	$sql="select * from member where id=".$_GET['id']."";//sql修改语句;
// 	echo $sql;
	$result=$pdo->query($sql);
	$data=$result->fetchALL(PDO::FETCH_OBJ);//从结果集中获取所有的数据;$data是对象组成的数组
	//var_dump($data[0]);
	if ($data[0]==null){//如果ID不存在就显示数据不存在
	   echo "数据不存在";	
	}
	if ($_POST['send']){ //判断是否点击了提交按钮
// 		var_dump($_POST);
		if ($_POST['pwd2']==$_POST['pwd']){//判断密码是否修改，如果修改了就执行else 加密；如果未修改就直接输出原来的密码
			$pwd=$_POST['pwd'];//输出到$sql语句中pwd='".$pwd."',;
		}else {
			$pwd=md5($_POST['pwd']);
		}
		//echo $pwd;
 		$sql="update member
			 set username='".$_POST['username']."',
					pwd='".$pwd."',
					email='".$_POST['email']."' 
			where id=".$_GET['id'];//最后一个拼接不要加逗号
		//echo $sql;
		$result=$pdo->exec($sql);
		if ($result){
			//header("location:getAll.php");
			//echo "修改成功";
			echo "<script>alert('修改成功');location.href='getAll.php'</script>";
		}else if ($result==0){
			echo "没有修改";
		}else {
			echo "修改失败";
		}
	}
}else {
	header("location:getAll.php");
}
?>
<!-- 和add静态页面一样 -->
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
<input type="hidden" name="pwd2" value=<?php echo $data[0]->pwd;?>><!-- 保存原来的密码 -->
    <label for="username">用户名：</label>
        <span id="tip1"></span>
    <input type="text" name="username" placeholder="请输入用户名" id="user" value=<?php echo $data[0]->username;?>> <br>
    <label for="username">密码：</label>
        <span id="tip2"></span>
   <input type="password" name="pwd" placeholder="请输入密码" id="pwd" value=<?php echo $data[0]->pwd;?>> <br>
    <label for="username">邮箱：</label>
         <span id="tip3"></span>
    <input type="text" name="email" placeholder="请输入邮箱" id="eml" value=<?php echo $data[0]->email;?>> <br>
        <input type="submit" value="立即提交" name="send" class="btn">
</form>

<script src="js封装/jquery-3.2.1.min.js"></script>
<script>
    var b_u=false;
    var b_p=false;
    var b_e=false;
    $(function () {
//用户名验证
        $("#user").bind("blur",function () {
            var user=$("#user").val();
            if (user==null || user==""){
                $("#tip1").html("用户名不能为空");
                $("#tip1").css("display","block");
            }else {
                var re = /^[a-zA-z]{2,15}$/;
                if (re.test(user)){//re.test(user)验证user是否符合这个正则re；
                    $("#tip1").css("display","none");
                    b_u=true;
                }else {
                     $("#tip1").html("字母、数字组成，字母开头，2-16位。");
                    $("#tip1").css("display","block");
                }
            }
        })
        $("#pwd").bind("blur",function () {
            var pwd=$("#pwd").val();
            if (pwd==null || pwd==""){
                $("#tip2").html("密码不能为空");
                $("#tip2").css("display","block");
            }else {
                var patrn=/^(\w){6,20}$/;
                if (patrn.test(pwd)){//re.test(user)验证user是否符合这个正则re；
                    $("#tip2").css("display","none");
                    b_p=true;
                }else {
                    $("#tip2").html("只能输入6-20个字母、数字、下划线");
                    $("#tip2").css("display","block");
                }
            }
        })
        $("#eml").bind("blur",function () {
            var eml=$("#eml").val();
            if (eml==null || eml==""){
                $("#tip3").html("邮箱不能为空");
                $("#tip3").css("display","block");
            }else {
                var yx = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/
                if (yx.test(eml)){//re.test(user)验证user是否符合这个正则re；
                    $("#tip3").css("display","none");
                    b_e=true;
                }else {
                    $("#tip3").html("必须含有@符 . com");
                    $("#tip3").css("display","block");
                }
            }
        })
        $(".btn").bind("click",function () {
            if (b_u){
                if (b_p){
                    if (b_e){
                        
                        return true;
                    }else {
                        $("#tip3").html("必须含有@符 . com");
                        $("#tip3").css("display","block");
                        return false;
                    }
                }else {
                    if (!b_e){
                        $("#tip3").html("必须含有@符 . com");
                        $("#tip3").css("display","block");
                    }
                    $("#tip2").html("只能输入6-20个字母、数字、下划线");
                    $("#tip2").css("display","block");
                    return false;
                }
            }else {
                if (b_p){
                    if (!b_e){
                        $("#tip3").html("必须含有@符 . com");
                        $("#tip3").css("display","block");
                    }
                }else {
                    if (!b_e){
                        $("#tip3").html("必须含有@符 . com");
                        $("#tip3").css("display","block");
                    }
                    $("#tip2").html("只能输入6-20个字母、数字、下划线");
                    $("#tip2").css("display","block");
                }
                $("#tip1").html("字母、数字组成，字母开头，2-16位。");
                $("#tip1").css("display","block");
                alert("请按要求输入");
                return false;
            }
        })

    })
</script>