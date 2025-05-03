<?php
interface Carro{
	// public $teste;  INVALIDO... Interfaces nao podem ter atributos. Gera PHP fatal error
	public function acelerar();
	public function frear();
}

class CarroEconomico implements Carro{
	public function acelerar(){
		return print "Acelerando...\n";
	}

	public function frear(){
		return print "Freando \n";
	}
}

class Pessoa {
	private $carro;
	public function setCarro(Carro $carro){
		$this->carro = $carro;
	}

	public function passearDeCarro(){
		$this->carro->acelerar();
		$this->carro->frear();
	}
}

$meuCarro = new CarroEconomico();
$pessoa = new Pessoa();
$pessoa->setCarro($meuCarro);
$pessoa->passearDeCarro();