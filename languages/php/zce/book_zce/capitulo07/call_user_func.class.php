<?php
/**
* Chama uma função de usuário dada pelo primeiro parâmetro
* @param function
** A função a ser chamada. Métodos de classe podem também ser invocados estaticamente usando esta função passando array($classname, $methodname) para este parâmetro.

* @param parameter
* Zero ou mais parâmetros a ser passado para a função.
*/
/** Exemplo 4 Usando um método da classe */
class MyClass{
	static function sayHello(){
		echo "Hello! \n";
	}
}
call_user_func(array('MyClass', 'sayHello'));
call_user_func('MyClass::sayHello');