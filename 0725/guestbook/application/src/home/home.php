<?php
/**
*作者：孙彐梅
*/
//导入smarty配置文件
include '../../../smarty.init.php';
$pdo=new PDO("mysql:host=".HOST.";dbname=".DBNAME,USERNAME,PWD."");
$pdo->query("set names utf8");//设置字符集
//var_dump($pdo);
/* ******分页开始**** */
$total=$pdo->query("select * from member")->rowCount();//统计用户的数量rowCount
//echo $total;//输出条数；
$pagesize=3;//每页显示的数据的条数；
$pageTotal=ceil($total/$pagesize);//ceil取比这个值大一个的整数；
//echo $pageTotal; //打印总页数
if ($_GET['page']){//当前页等于查询字符串中的page的值
	$page=$_GET['page'];
	if ($page>=$pageTotal){ //判断当前页大于总页数的话就让当前页等于总页数；
		$page=$pageTotal;
	}
}else {
	$page=1;
}
/******** 分页结束******* */
$sql="select * from member order by id desc limit ".($page-1)*$pagesize.",".$pagesize."";  //查询sql语句；
$result=$pdo->query($sql);
$data=$result->fetchAll(PDO::FETCH_OBJ);
//根据总页数循环出每一页
$str="<ul class='pagination'>";
//判断当它等于第一页的时候禁用
if ($page==1){
	$str.="<li class='disabled'><a href='?page=".($page-1)."'><span>&laquo;</span></a></li>";
}else {
	$str.="<li><a href='?page=".($page-1)."'><span>&laquo;</span></a></li>";
}

for($i=1;$i<=$pageTotal;$i++){
// 	echo $i;
//如果是当前页就加active默认的
	if ($page==$i){
		$str.="<li class='active'><a href='?page=".$i."'>".$i."</a></li>";
	}else {
		$str.="<li><a href='?page=".$i."'>".$i."</a></li>";
	}
}
//判断当它等于最后页数的时候禁用
if ($page==$pageTotal){
	$str.="<li class='disabled'><a href='?page=".($page+1)."'><span>&raquo;</span></a></li>";
}else {
	$str.="<li><a href='?page=".($page+1)."'><span>&raquo;</span></a></li>";
}

$str.="</ul>";
//把分页字符串赋值给模板 
$smarty->assign("page", $str);
// var_dump($data);
//把数据赋值给变量
$smarty->assign("data", $data);
//把views下面home里面的home.html转过来，指定要显示的静态页面
$smarty->display("home/home.html");

?>