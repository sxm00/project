<?php
error_reporting(E_ALL^E_NOTICE^E_STRICT^E_DEPRECATED);
$pdo=new PDO("mysql:host=localhost;dbname=web13",'root',"");
$pdo->query("set names utf8");
//var_dump($_POST);
//var_dump($_FILES);
//接收前台用户名失去焦点时的验证数据
if($_POST['action']=="checkUserName"){
    //var_dump($_POST);
    //把用户名先到数据库中查询，如果存在返回taken；
        $result2=$pdo->query("select * from member where username='".$_POST['username']."'");
        $oneUser=$result2->fetchAll(PDO::FETCH_OBJ);
        if($oneUser[0]){
            echo "taken";
            return false;
        }
}
//如果没有reg的值就跳转到静态页面
if($_POST['action']=="reg"){
//把用户名先到数据库中查询，如果存在返回taken；
    $result2=$pdo->query("select * from member where username='".$_POST['username']."'");
    $oneUser=$result2->fetchAll(PDO::FETCH_OBJ);
    if($oneUser[0]){
        echo "taken";
        return false;
    }
    //检测uploads目录是否存在,不存在就创建
    $uploads="uploads";
    if(!file_exists($uploads)){
    //创建目录
        mkdir($uploads);
    }
    //判断是否上传了文件
    $pic=null;
    //如果上传了文件，就把上传的文件名保存到数据库中
    //未上传文件，把default.jpg保存到数据库中
    if(is_uploaded_file($_FILES['pic']['tmp_name'])){
    //上传文件生成新的文件名
    //原理：把字符串转换为数组，获取数组的最后一个元素，这就是文件的扩展名；
    //文件的扩展名之前添加随机数和日期时间；
    $arr=explode(".",$_FILES['pic']['name']);
    $newname=rand(100,999).date("YmdHis").".".$arr[count($arr)-1];
         //处理上传
            if(move_uploaded_file($_FILES['pic']['tmp_name'],$uploads."/".$newname."")){
                   // echo "ok";
                   $pic=$newname;
            }else{
                    echo "failed";
            }
    }else{
    //如果没有上传就默认头像
        $pic="default.png";
    }

    $sql="insert into member(
        username,
        pwd,
        email,
        pic,
        regTime
    )values(
        '".$_POST['username']."',
       '".md5($_POST['pwd'])."',
        '".$_POST['email']."',
        '".$pic."',
        '".date('Y-m-d H:i:s')."'
    )";
  //  echo $sql;
      $result=$pdo->exec($sql);
      if($result){
            echo "ok";
      }else{
        echo "failed";
      }
}
?>