<?php
/**
*作者：孙彐梅
*/
include 'common.php';//把common.php导入进来；就是下面注释掉的try catch语句；
//链接mysql数据库;mysql:host主机名;dbname数据库名；"root"：用户名；""，密码为空；
//$pdo=new PDO("mysql:host=localhost;dbname=web13","root","");
//var_dump($pdo);
//尝试执行某段代码，如果出错，catch就输出getMessage();
/* try {
	$pdo=new PDO("mysql:host=localhost;dbname=web13","root","");
}catch (PDOException $e){ //PDOException内置类
	//$e=new;
	echo "链接mysql服务器，".$e->getMessage();
}
$pdo->query("set names utf8");//pdo执行sql语句；“set names utf8”设置操作数据库的字符集； */
$sql="select * from member order by id desc";  //查询sql语句；
$result=$pdo->query($sql);//返回的是PDOStatement对象的结果集；
/* echo "<pre>";
var_dump($result);//输出此结果对象
echo "</pre>"; */
/* echo "<pre>";
var_dump($result->fetchAll(PDO::FETCH_OBJ));
//返回一个数组包含结果集中的所有；fetchAll(PDO::FETCH_OBJ)变成对象object；fetchAll()输出为array数组；
echo "</pre>"; */
$data=$result->fetchAll(PDO::FETCH_OBJ);
echo "<table border='1' align='center' width=95% cellspacing='1' cellpadding='5'>";
echo "<tr><th>用户名</th><th>邮箱</th><th>注册时间</th><th>操作</th></tr>";
foreach ($data as $key=>$value){
	//var_dump($value->username);//$value是对象 代表的是每一条数据
	echo "<tr>";
	echo "<td>".$value->username."</td>";
	echo "<td>".$value->email."</td>";
	echo "<td>".$value->regTime."</td>";
	echo "<td>";
	echo "<a href='update.php?id=".$value->id."'>修改</a>&nbsp;&nbsp;";//点击修改执行delete.php
	echo "<a href='delete.php?id=".$value->id."'>删除</a>";//点击删除执行delete.php
	echo "</td>";
	
	echo "</tr>";
}
echo "<tr><td colspan='4' align='center'><a href='add.php'>添加数据</a></td></tr>";//在add页面添加
echo "</table>";
?>