<?php
/**
* Testa yeld
*/
class MeuGeradorDeInteracoes
{
	public function gerador_um_para_tres(){
		for ($i = 0; $i <= 3; $i ++, (yield $i)) {} // Sempre que utilizar o yeld em uma expressao, lembre de coloca-lo entre PARENTESES, please!
	}
	
}

$gerador = new MeuGeradorDeInteracoes();
foreach ($gerador->gerador_um_para_tres() as $value) {
	echo $value;
}