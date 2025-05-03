<?php
class A{
	public static function quem() {
		print __CLASS__;
	}

	public static function testarComSelf(){
		self::quem();
	}

	public static function testarComStatic(){
		static::quem(); // Utilizando o late static binding
	}
}

class B extends A{
	public static function quem(){
		print __CLASS__;
	}
}

B::quem(); // print 'B'. Normal...
A::quem(); // print 'A'. Normal...

B::testarComSelf(); // Opa, Interessante ne, poderia achar que imprimiria 'B', mas imprime 'A'. Por conta da palavra chave 'self::'.
B::testarComStatic(); // Ao contrário do SELF, Refere-se a classe que está invocando a propriedade ou método em vez de onde eles foram definidos.