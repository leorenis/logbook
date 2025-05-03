<?php
class Pessoa{
	public function __construct(){
		echo "Sendo construido...\n";
	}

	public function __destruct(){
		echo "Destruindo objeto..\n";
	}
}

$pessoa = new Pessoa();
$outrapessoa = $pessoa;
unset($pessoa); // Apesar de desalocar o espaço em memoria, ainda existe uma referencia desse objeto em $outrapessoa.
var_dump("Tem alguma referencia ai?");