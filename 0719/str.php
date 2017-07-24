<?php
/**
*作者：孙彐梅
*/
$str="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
//echo strlen($str);//输出字符串$str的长度；26位
//echo strtoupper($str);//把小写字母变为大写
//echo $str[rand(0,strlen($str)-1)];//随机输出字符串strlen($str)里面的值；字符串最后一个字符的下标：strlen($str)-1)；
//循环输出4位字符，
$temp=null;
for($i=0;$i<4;$i++){
	$temp.=$str[rand(0,strlen($str)-1)];//一般使用这种写法
	//$temp=$temp.$str[rand(0,strlen($str)-1)];//点是链接符，可以缩写在等于号前面，如上所示
}
echo $temp;
?>