<?php


/**
*作者：孙彐梅
*/
/* 图片的父类 */
class Image{
	public $width;
	public $height;
	public $type=null;
	public function __construct($_width,$_height){
		$this->width=$_width;
		$this->height=$_height;
	}
	public function Msg(){
		echo "我是Image类的方法<br>";
	}
}
/* JPEG extends Image ：JPEG继承Image类*/
class JPEG extends Image{
	//重写父类的属性
	public $type="jpeg";
	//新增的属性
	public $owner="kong";
	//重写的方法
	public function Msg(){
		parent::Msg();//在子类中调用父类的方法
		echo "我是子类JPEG重写的方法<br>";
	}
	//新增的方法
	public function getOwner(){
		return $this->owner;
	}
}
class GIF extends Image{
      
}
$jpeg=new JPEG(100,120);
$jpeg->Msg();
/* echo $jpeg->type;
echo $jpeg->owner; */
//var_dump($jpeg);
?>