<?php
error_reporting(E_ALL^E_NOTICE^E_DEPRECATED^E_STRICT); 
//设置错误报告的等级,参数是int类型，一般写E_ALL所有错误;E_ALL^E_NOTICE不显示notice提示；E_DEPRECATED 过时的语法；E_STRICT 严格的语法；
date_default_timezone_set("PRC");
echo date("Y-m-d H:i:s");
?>