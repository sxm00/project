<?php


/**
*作者：孙彐梅
*/
//父类
class Member1{
	/* public公共的，类外子类都可以访问protected受保护的，类外不可以访问，但是子类可以访问 private私有的不能被类外和子类访问 */
	public $username="tom";
}
class Member2{
	/* public公共的，类外子类都可以访问protected受保护的，类外不可以访问，但是子类可以访问 private私有的不能被类外和子类访问 */
	public $username="tom";
}
//子类
class VIP extends Member1{
	public function demo(){
		return $this->username;
	}
}
$m=new VIP();
//类外访问
echo $m->demo();
?>