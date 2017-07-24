<?php
/**
*作者：孙彐梅
*/
session_start();//开启session
$image=imagecreatetruecolor("120", "50");
$bgColor=imagecolorallocate($image, rand(200,255),rand(200,255),rand(200,255));//设置图片的填充颜色
$textColor=imagecolorallocate($image, rand(0,150),rand(0,150),rand(0,150));//设置验证码的填充颜色
imagefill($image, 0, 0, $bgColor);//为图片填充颜色
//输出4位字符
$str="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$temp=null;
for($i=0;$i<4;$i++){
	$temp.=$str[rand(0,strlen($str)-1)];//点是链接符，循环累加在一起形成4位字符
}
$_SESSION['captcha']=$temp;//把验证码保存在session中，方便在login中打印此$_SESSION，首先要在最上面开启session；
//循环写个文本在画的图片上面（图片，字体大小，角度，x位置，y位置，字体颜色，字体，验证码）；这样每个字符都是随机的
for ($j=0;$j<4;$j++){
	$size=rand(15,30);
	$angle=rand(-8,8);
	$x=floor(120/4)*$j+8; //120是$image的“120”;让4个字符较平均的在x轴上分布
	$y=rand(30,45);
	$fontfile= "GEORGIAB.TTF";
	imagettftext($image, $size, $angle, $x, $y, $textColor,$fontfile, $temp[$j]);
}
imagepng($image);//输出一个png图片 位置在最后


?>

