<?php
/**
*作者：孙彐梅
*
*/
$image=imagecreatetruecolor("550", "550");//创建真彩色图片imagecreatetruecolor（“宽”，“高”）；
//var_dump($image);
$bgColor=imagecolorallocate($image, 100, 255,200);//设置图片的填充颜色
$rectColor=imagecolorallocate($image, 80, 25,100);//重新画图的填充背景颜色
$lineColor=imagecolorallocate($image, 255, 0, 0);//画一条直线的填充颜色
$dotColor=imagecolorallocate($image,0, 0,0);//画点的填充颜色
$strColor=imagecolorallocate($image,120,200,25);//画字体填充的颜色
imagefill($image, 0, 0, $bgColor);//为图片填充颜色
imagefilledrectangle($image, 50, 50,150,150, $rectColor);//重新画一个矩形；50,50是左上角的坐标；150,150是右下角的坐标
imageline($image, 120, 50, 300, 90, $lineColor);//画一条直线
//循环画一个点，形成一条直线
for ($i=350;$i<400;$i++){
	imagesetpixel($image,$i,$i+12, $dotColor);//设置一个点
}
//imagestring($image, 5, 400, 50, "hellor", $strColor);//画一个字体  （背景，字体大小（1-5），x位置，y位置，字符串，字体颜色）
imagettftext($image, 125, 45, 50,500, $strColor, "GEORGIAB.TTF", "hello");
imagepng($image);//输出一个png图片 位置在最后
?>