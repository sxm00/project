<?php
/**
*作者：孙彐梅
*/
//var_dump($_POST);
//echo file_get_contents("data.txt");//读取外部文件
//echo file_put_contents("data2.txt", "hello");//创建文件data2.txt，并赋值；
if ($_POST['send']){
	$data="<?php";
	$data.="\n";
	$data.="define('HOST','".$_POST['host']."');";
	$data.="\n";
	$data.="define('USERNAME','".$_POST['username']."');";
	$data.="\n";
	$data.="define('PWD','".$_POST['pwd']."');";
	$data.="\n";
	$data.="define('DBNAME','".$_POST['dbname']."');";
	$data.="\n";
	$data.="?>";
	file_put_contents("config.php", $data); 
}


?>
<form action="" method="post">
	<input type="text" name="host"><br>
	<input type="text" name="username"><br>
	<input type="text" name="pwd"><br>
	<input type="text" name="dbname"><br>
	<input type="submit" name="send" value="提交"><br>
</form>