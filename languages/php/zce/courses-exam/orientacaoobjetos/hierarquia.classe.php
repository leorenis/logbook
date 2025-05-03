<?php
/**
 * 
*/
class A{
	private $id;
}
class B extends A{
	public $id; // Aumentar a visibilidade pode, diminuir NAO.

}

abstract class Base{
	protected static $saudacao = "Ola!";
	const ola = 'Ola';
	abstract public function metodo1();
	public static function metodoestatico(){
		return static::$saudacao = "OI";
	}
}

abstract class OutraBase extends Base{
	abstract public function metodo2();
	public function metodo3(){
		echo __METHOD__;
	}
}

echo Base::metodoestatico();
echo Base::ola;