<?php
if($_POST['send']){
	echo "<pre>";
    var_dump($_POST); //$_POST传递HTML里面的数据
    echo "</pre>";
}else {
	echo "未点击提交按钮";
}

?>