<?php
session_start();
$_SESSION['username']="tom";//在此文件赋值。在b文件打开的页面可以同时加载；
unset($_SESSION['username']); //销毁指定的元素
echo "<pre>";
var_dump($_SESSION);
echo "</pre>a";
?>