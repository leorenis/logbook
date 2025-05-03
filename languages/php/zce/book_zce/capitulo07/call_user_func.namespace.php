<?php
/**
* Chama uma função de usuário dada pelo primeiro parâmetro
* @param function
** A função a ser chamada. Métodos de classe podem também ser invocados estaticamente usando esta função passando array($classname, $methodname) para este parâmetro.

* @param parameter
* Zero ou mais parâmetros a ser passado para a função.
*/


// Exemplo 3 - Usando call_user_func() com nome do namespace
namespace My\AppNamespace;

class MyClass {
    static  function test() {
        print "Hello world!\n";
    }
}
// Chamada estatica, usando o 1º parametro. Sem a utilização do array. Apenas concatenando os valores.
call_user_func(__NAMESPACE__ .'\MyClass::test'); // Permitido a partir do PHP 5.3.0 

// Chamada estatica, usando o array no 1º parametro passando o nome completo da classe e o metodo como valores.
call_user_func(array(__NAMESPACE__ .'\MyClass', 'test')); // Permitido a partir do PHP 5.3.0