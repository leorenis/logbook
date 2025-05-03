<?php
/**
* O método mágico __clone() é unicamente usado ao tentarmos clonar um objeto com a palavra reservada clone. Caso o método __clone existir dentro da classe, ele será executado; caso contrário, será apenas ignorado.
*/
class Casa{
	public $cor;
	public $endereco;

	public function __construct(){
		$this->endereco = new Endereco();
	}
	// Lembre-se: O PHP, por padrão, faz uma clonagem "raza" (shallow) e, para alterar esse comportamento, devemos utilizar o método mágico __clone().
	public function __clone(){
		$this->endereco = clone $this->endereco;
	}
}

class Endereco{
	public $rua;
	public $numero;
}

$casa = new Casa();
$casa->cor = "Amarela";
$casa->endereco->rua = "Alameda dos Eucaliptos";
$casa->endereco->numero = 123;

$novaCasa = clone $casa; // operador clone aciona o metodo magico __clone()
$novaCasa->endereco->rua = "Avenida das Araucarias";
$novaCasa->endereco->numero = 123;

var_dump($casa == $novaCasa); // false. Pois as ruas sao diferentes. Isso so aconteceu devido a implementacao do metodo magico __clone.