<?php
class Pessoa{
	private $id;
	public function pessoa(){
		echo __METHOD__;
	}
	public function __construct(){ // Este prevalece
		echo __METHOD__;
	}

	public function __destruct() { // Método será executado quando o objeto estiver sendo destruido da memoria. Normalmente no final da execução do script do arquivo.
		echo "Estou sendo destruido...";
	}
}

$pessoa = new Pessoa();
var_dump("Ainda estou VIVO... O arquivo ainda está sendo executado.");

// O que pode chamar o metodo __destruct()?
// * Perda de referencia... Atribuindo NULL para o objeto. [$pessoa = null;]. Isso deixa o Garbage Collector livre para remove-lo da memoria.
// * Remoção da memoria... Utilizando o construtor de linguagem unset($pessoa); Com unset, o objeto realmente será desalocado da memoria.

// Quando não há um desalocamento de memória ou perda de referencia atraves da atribuição do unset() ou NULL ]. O objeto será destruido ao final da execução.