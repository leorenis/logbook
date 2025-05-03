<?php
// Exemplo 1 - Passagem de valor
function somaPorReferencia (&$x) {
	$x += 2;
}
$a = 5;
print somaPorReferencia($a); // Vazio... Nao tem retorno. Fique esperto.

print $a; // Agora sim! 7 por que a referencia de foi alterada, passando de 5 para 7.

// Exemplo 2 - Adicionando item na colecao

function adicionaItem(&$produtos, $novoItem){
	$produtos[] = $novoItem; // REPARE, nada de retorno
}

adicionaItem($itens, "Sabonete");
adicionaItem($itens[], "Sabonete"); // Funciona, mas adiciona um array dentro do array, gera um array multidimensional
// adicionaItem([], "Sabonete"); NAO FUNCIONA
print_r($itens);