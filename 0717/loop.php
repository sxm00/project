<?php
/* $member=array("tom",'peter','mary');//索引数组，key是数字；
//echo $member[0];
//for 循环 只能循环索引数组，不能循环关联数组;count($member)数组的长度;
for($i=0;$i<count($member);$i++){
	echo $member[$i];
} */

/* $member=array('username1'=>"tom",'username2'=>"peter","username3"=>'mary');//关联数组，key是数字；
//echo $member[0];
//foreach 循环 既可以循环关联数组也可以循环索引数字
foreach ($member as $key=>$value){
     echo $key;
     echo $value."<br>";
}
 */
/* $member=array("tom","peter",'mary');//索引数组，key是数字；
//echo $member[0];
//foreach 循环 既可以循环关联数组也可以循环索引数字
foreach ($member as $key=>$value){
	echo $key;
	echo $value."<br>";
} */

/* $member=array('username'=>"grace",'level'=>"VIP");
unset($member['username']); //unset删除数组中的某个元素；
echo "<pre>";
var_dump($member);
echo "</pre>"; */

/* $member=array('username'=>"grace",'level'=>"VIP");
echo implode("@", $member); //implode数组转换为字符串 第一个参数链接 第二个参数运行此变量
//echo gettype(implode("@", $member)); //gettype 输出变量的数据类型 */

$str="tom,peter,mary";
echo "<pre>";
var_dump(explode("@", $str));//@就显示一个
var_dump(explode(",", $str)); //，找对分隔符 显示三个 任何一个存在的字符都是分隔符
echo "</pre>";



?>