<?php
// Permite aplicar um callback em cada elemento do array(). Recebe como 1º parâmetro um array e como 2º uma função callback.
$versoes = [
'PHP 5.2',
'PHP 5.3',
'PHP 5.4',
];

array_walk($versoes, function ($item) {
	printf('%s', $item. "\n");
});

// Recebendo a chave
array_walk($versoes, function ($item, $chave){
	printf("%d => %s \n", $chave, $item);
});

// Recebendo qualquer outro valor
$dataDeLancamento = ["06/03/2008", "05/09/2013", "02/02/2006"];
array_walk($versoes, function ($item, $chave, $datas){
	printf("%d => %s Lançado em: %s \n", $chave, $item, $datas[$chave]);
}, $dataDeLancamento);