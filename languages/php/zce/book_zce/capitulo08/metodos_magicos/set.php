<?php
class Instrumento{
	public function __set($propriedade, $valor){
		return print "Tentativa de acesso a propriedade $propriedade e valor $valor.";
	}
}

$violao = new Instrumento();
$violao->cor = 'Preto';