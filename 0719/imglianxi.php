<?php
/**
*作者：孙彐梅
*/
session_start();
$image=imagecreatetruecolor("120","50");
$bgcolor=imagecolorallocate($image,rand(200,255), rand(200,255), rand(200,255));
$textcolor=imagecolorallocate($image,rand(0,150), rand(0,150), rand(0,150));
imagefill($image, 0, 0, $bgcolor);
$str="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$temp=null;
for ($i=0;$i<4;$i++){
	$temp.=$str[rand(0,strlen($str)-1)];
}
$_SESSION['captcha']=$temp;
for ($j=0;$j<4;$j++){
	$size=rand(15,25);
	$angle=rand(-8,8);
	$x=floor(120/4)*$j+8;
	$y=rand(30,45);
	$fontfile="GEORGIAB.TTF";
	imagettftext($image, $size, $angle, $x, $y, $textcolor, $fontfile, $temp[$j]);
}
imagepng($image); 

?>