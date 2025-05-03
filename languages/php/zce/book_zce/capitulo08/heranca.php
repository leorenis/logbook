<?php
class Casa{
	public $cor;
	public $quantidadeDeQuartos;

	function abrirPortaDaSala(){
		print "Porta da sala aberta";
	}
}
// Ao usarmos herança, não é necessário reescrever toda a classe.
class CasaReformada extends Casa{
	function abrirJanelaDoQuarto(){
		print "Janela do quarto aberta";
	}
}

$casaReformada = new CasaReformada();
$casaReformada->cor = "Azul";
$casaReformada->quantidadeDeQuartos = 3;
print $casaReformada->abrirJanelaDoQuarto();
print "\n";
print_r($casaReformada);