<?php

var_dump($_GET);//获取get
echo $_GET['username']; //输出get中填写的username；
?>
<a href="get.php?action=show">jump</a>
<!-- <form action="" method="get"> 
  <input type="text" name="username"> <br>
  <input type="submit" value="submit" name="send">
</form> --> <!-- 表单注释掉$_GET['username']可以从地址栏中获取  地址栏需填写get.php?username=hhdhhh&show=jhgggg  -->
