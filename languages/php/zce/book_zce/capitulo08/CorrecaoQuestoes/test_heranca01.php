<?php
class A {
	public $a = 5;

	public function a(){
		return $this->a;
	}
}

class B extends A{
	public $a = 10; // Nesse caso, esse prevalece, quando chamado pelo B

	public function b(){
		echo $this->a. $this->a();
	}
}

$b = new B();
$b->b();