<?php
/**
* call_user_func_array — Chama uma dada função de usuário com um array de parâmetros.
* @param callback
* O callable a ser chamado.
* @param param_arr
* Os parâmetros para ser passado para a função, com array indexado.
*/

## Exemplo 2 - using namespace name
namespace Foobar;

class Foo {
    static public function test($name) {
        print "Hello {$name}!\n";
    }
}

// As of PHP 5.3.0
call_user_func_array(__NAMESPACE__ .'\Foo::test', array('Hannes'));

// As of PHP 5.3.0
call_user_func_array(array(__NAMESPACE__ .'\Foo', 'test'), array('Philip'));