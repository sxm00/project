<?php
/**
*作者：张三，邮箱：zhang@zhang.com
*/
error_reporting(E_ALL^E_NOTICE);
date_default_timezone_set("prc");//设置默认时区 中国
//echo date("Y年m月d日 H:i:s",time()+3600*24*30);//time()+3600*24*30时间戳一个月后
echo "<pre>";
var_dump(getdate());
echo "</pre>";
?>