<?php
//延缓代码执行
//sleep(3);
//var_dump($_GET) ;
error_reporting(E_ALL^E_NOTICE^E_STRICT^E_DEPRECATED);
$pdo=new PDO("mysql:host=localhost;dbname=web13",'root',"");
$pdo->query("set names utf8");
$sql="select * from admin where username='".$_GET['username']."' and pwd='".md5($_GET['pwd'])."'";
//echo $sql;
//执行sql语句 返回结果对象
$result=$pdo->query($sql);
//从结果集对象中获取所有的数据
//返回的类型是对象组成的数组
$data=$result->fetchAll(PDO::FETCH_OBJ);
if($data[0]){
    echo "ok";
}else{
    echo "failed";
}
?>