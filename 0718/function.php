<?php
/**
*作者：张三，邮箱：zhang@zhang.com
*@param $username="tom"字符串 默认值是tom
*/
error_reporting(E_ALL^E_NOTICE);
/* function Msg($username="tom"){//$username="tom"可以写默认值;传的实参可以覆盖此值
	echo $username;
}
Msg("peter");//传实参 */

 function Msg($username,$gender,$phone){
 echo $username;
 echo $gender;
 echo $phone;
 }
 Msg("peter","male","5555");//传实参  用什么方法实参的顺序不影响？

?>