<?php
/**
* Chama uma função de usuário dada pelo primeiro parâmetro
* @param function
** A função a ser chamada. Métodos de classe podem também ser invocados estaticamente usando esta função passando array($classname, $methodname) para este parâmetro.
* @param parameter
* Zero ou mais parâmetros a ser passado para a função.
*/
// Exemplo 1 - call_user_func()
function exibirMensagem(){
	print "Ola Brasil\n";
}
call_user_func("exibirMensagem");
call_user_func("EXIBIRMENSAGEM"); // Também Funciona viu... 

// Exemplo 2 - Passagem de parametros call_user_func()
function somar(){
	$a = func_get_arg(0);
	$b = func_get_arg(1);
	return $a + $b;
}

print call_user_func("somar", 5, 9, array(1, 'a'));