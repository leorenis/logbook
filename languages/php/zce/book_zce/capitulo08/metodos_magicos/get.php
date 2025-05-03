<?php
class Ventilador{
	private $modelo;
	public function __get($propriedade){
		print "Tentaram acessar a propriedade: ".$propriedade;
	}
}
$ventiladorDoQuarto = new Ventilador();
$ventiladorDoQuarto->marca; // Acionou o __get por que essa propriedade nao existe
$ventiladorDoQuarto->modelo; // Acionou o __get por que essa propriedade nao está visivel (acessivel).