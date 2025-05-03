<?php
// Realiza comparação incluindo as chaves de um array(). Lembre-se de que são usados a chave e o valor para comparar, então ambos devem ser iguais.
$a = ['p'=> "Pedra", "Tesoura"];
$b = ['Pedra', 'Papel'];
print_r(array_diff_assoc($a, $b));