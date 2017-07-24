<?php
error_reporting(E_ALL);
define ("ONLY","pretty good!"); //声明常量
//echo ONLY;//读取常量
echo __FILE__; //读取文件的名称及完整的路径；
echo "<hr>";
echo __DIR__; //读取文件所在的完整的路径，没有名称；
?>