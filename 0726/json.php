<?php
/**
*作者：孙彐梅
*/
$member=array("username"=>"tom","gender"=>"female");
//var_dump($member);
//echo json_encode($member);//输出json字符串
var_dump(json_decode(json_encode($member)));//把json字符串输出json对象
?>