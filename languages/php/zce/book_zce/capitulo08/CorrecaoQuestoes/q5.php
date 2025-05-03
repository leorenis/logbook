<?php
interface myBaseClass1 {
	public function doSomething();
	public function specialFunction1();
}
interface myBaseClass2 {
	public function doSomething($special); // ERRO1:  Nao pode passar parametro se assinatura do classe MyBaseClass1 nao definiu
	public function specialFunction2();
}
class myClassA implements myBaseClass1, myBaseClass2 {
	// ERRO2: Classe nao implementa os metodos das interfaces
	function doSomething() {
		echo '...';
	}
	function mySpecialFunction1() {
		echo '...';
	}
	function mySpecialFunction2() {
		echo '...';
	}
}
$a = new myClassA();
$a->doSomething();