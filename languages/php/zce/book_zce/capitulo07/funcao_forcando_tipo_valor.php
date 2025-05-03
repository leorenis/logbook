<?php
// Em alguns casos, enquanto estamos programando, queremos ter certeza de que, se alguém for utilizar uma função que programamos, utilize-a de maneira correta. Podemos forçar o tipo de variável que queremos que seja passado. Ex: 

function prepareAlmoco(array $panela, array $ingredientes){
	foreach ($ingredientes as $ingrediente) {
		$panela[] = $ingrediente; 
	}
	return $panela;
}

// prepareAlmoco("", ""); Se tentarmos usar assim, o PHP lancara um ERRO. Pois nao aceita string como argumento e sim ARRAY. VEJA:
var_dump(prepareAlmoco([], ['sal', 'pimenta', 'carne'])); // Sal, pimenta e carne foram adicionados na panela.