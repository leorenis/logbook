<?php
// Ordena um array pelos valores utilizando uma função de comparação definida pelo usuário
function cmp($a, $b)
{   
    if ($a == $b) {
    return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$chave: $valor\n";
}