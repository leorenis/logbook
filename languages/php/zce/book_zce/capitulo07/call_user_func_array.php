<?php
/**
* call_user_func_array — Chama uma dada função de usuário com um array de parâmetros.
* @param callback
* O callable a ser chamado.
* @param param_arr
* Os parâmetros para ser passado para a função, com array indexado.
*/

## Exemplo 1
function foobar($arg, $arg2) {
    echo __FUNCTION__, " got $arg and $arg2\n";
}
class foo {
    function bar($arg, $arg2) {
        echo __METHOD__, " got $arg and $arg2\n";
    }
}


// Call the foobar() function with 2 arguments
call_user_func_array("foobar", array("one", "two"));

// Call the $foo->bar() method with 2 arguments
$foo = new foo;
call_user_func_array(array($foo, "bar"), array("three", "four"));


## Exemplo 3 Using lambda function

$func = function($arg1, $arg2) {
    return $arg1 * $arg2;
};

var_dump(call_user_func_array($func, array(2, 4))); /* As of PHP 5.3.0 */