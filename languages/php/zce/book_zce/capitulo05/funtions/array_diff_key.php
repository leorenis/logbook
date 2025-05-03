<?php
// Computa a diferença entre arrays usando as chaves na comparação.
$alimentos = ['arroz' => 'Arroz', 'feijao' => 'Feijao', 'milho' => 'Milho'];
$alimentacao = ['a' => 'Arroz', 'f' => 'Feijao'];

print_r(array_diff_key($alimentos, $alimentacao));