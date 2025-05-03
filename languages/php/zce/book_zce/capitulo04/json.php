<?php
// json_encode(). Transforma array ou objetos em (Java Script Object Notation | JSON).
$pessoas = [
	'pessoas' => [
		'pessoa1' => [
			'nome' => 'Leo Santos',
	        'sexo' => 'Masculino',
	        'endereco' => 'Avenida dos Eucaliptos',
		],
		'pessoa2' => [
			'nome' => 'Laisa Santos',
	        'sexo' => 'Feminino',
	        'endereco' => 'Avenida dos Eucaliptos',
		],
		'pessoa3' => [
			'nome' => 'Pedro Soares',
	        'sexo' => 'Masculino',
	        'endereco' => 'Avenida das Palmeiras',
		],
	],
];
$jpessoas = json_encode($pessoas, JSON_HEX_QUOT | JSON_HEX_TAG);
print $jpessoas;