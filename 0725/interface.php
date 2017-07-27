<?php
/**
*作者：孙彐梅
*/
//api:app;ication Programming interface
//接口
Interface Image{
	public function Msg();
	public function Demo();
}
Interface Member{
	public function Sayhi();
}
class foo implements Image,Member{
	public function Msg(){
		echo "Msg";
	}
	public function Demo(){}
	public function Sayhi(){
		echo "Member接口";
	}
}
$f=new foo();
$f->Sayhi();
var_dump($f->Msg());
?>