<?php
/**
*作者：孙彐梅
*/
class Member{
	public $username="tom";
	//等于类名的函数称为构造函数；直接被调用 触发这个构造方法
	/* public function Member(){
		echo "Member<br>";
	} */
	//等于类名的函数称为构造函数；直接被调用 触发这个构造方法 php中优先使用这个__construct
	public function __construct(){
		echo "construct Member<br>";
	}
	public function getUsername(){
	//	var_dump($this->username);
		return  $this->username;
	}
	public function Msg(){
		echo "Msg方法";
	}
	//析够方法 和构造函数相反 类实例化时最后一个自动执行
	public function __destruct(){
		echo "destruct Member<br>";
	}
}
//实例化个类
$m=new Member();
//调用对象的属性
echo  $m->getUsername()."<br>";
//调用对象的属性
echo $m->username."<br>";
//调用对象的方法
echo $m->Msg()."<br>";

//var_dump($m);
?>




<!-- <script>
	document.querySelector("body").addEventListener("click",()=>{alert("haha");});
	 var msg=data=>data;
	 var sum=(num1,num2)=>num1+num2;
	 console.log(msg("tom"));
	 console.log(sum("5,3"));
</script> -->