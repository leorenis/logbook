<?php
// PUBLIC
class Carro{
	public $marca = "HONDA"; // Lembre-se, propriedades precisam de um modificador de acesso.

	public function ligarMotor(){}
}

$meuCarro = new Carro();
print $meuCarro->marca ."\n"; // Modificador publico... Acesso liberado!


// PROTECTED
class Moto{
	protected $cilindradas = 150; // Padrao 125 por que vende mais... :)
}
$minhaMoto = new Moto();
//print $minhaMoto->cilindradas; // E agora? Opa, deu erro! Pois propriedades protegidas nao sao acessiveis fora do escopo da classe ou da hierarquia de classes em que o objeto está inserido.

// Então, vamos fazer funcionar
class MotoBross extends Moto{
	public function exibirCilindradas(){
		return print $this->cilindradas. "\n";
	}
}

$suaMoto = new MotoBross();
$suaMoto->exibirCilindradas();

// PRIVATE
class Bicicleta{
	private $numeroDeRodas = 2;

	public function exibirNumeroDeRodas(){
		return print $this->numeroDeRodas. "\n";
	}
}

$bicicleta = new BicicletaCross();
$bicicleta->exibirNumeroDeRodas();

// Porem se tentarmos estender essa classe para acessar o atributo $numeroDeRodas o php lança um ERRO.
class BicicletaCross extends Bicicleta{
	public function __construct()
	{
		print $this->numeroDeRodas;
	}
}