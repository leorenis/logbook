<?php
// Caso exista um método abstrato e ele não for sobrescrito na classe filha, o PHP exibirá um FATAL ERROR. Classes abstratas nao podem ser instanciadas.
abstract class Pessoa{
	public abstract function andar();

	// Também podemos definir métodos completos para serem utilizados pelas classes filhas.
	public function comer(){
		print "Metodo comer invocado no objeto: ". get_class($this). "\n";
	}
}

class Adulto extends Pessoa{
	
	public function andar(){
		print "Anda rapido! \n";
	}
}

class Crianca extends Pessoa{
	
	public function andar(){
		print "Anda devagar! \n";
	}
}

$adulto = new Adulto();
$adulto->comer();

$crianca = new Crianca();
$crianca->comer();

// Forçando um FATAL ERROR por nao extender o metodo abstrato da classe pessoa.

/*
class Idoso extends Pessoa{ // Esse idoso nao anda mais... E agora. APresentara um FATAL ERROR

}
*/