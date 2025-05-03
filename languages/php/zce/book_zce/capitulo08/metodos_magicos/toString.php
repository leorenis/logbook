<?php
/*O método __toString() permite que uma classe decida como se comportar quando convertida para uma string. 
Por exemplo, o que echo $obj; irá imprimir. Este método precisa retornar uma string, senão um erro nível E_RECOVERABLE_ERROR é gerado.

Aviso
Você não pode lançar uma exceção de dentro do método __toString(). Fazer isso resultará em um erro fatal.*/

class Livro {
	private $titulo;
	private $autor;

	public function __construct($titulo, $autor){
		$this->titulo = $titulo;
		$this->autor = $autor;
	}

	public function __toString(){
		return "Imprimindo propriedades do objeto livro: {$this->titulo} e {$this->autor}"; // Esse metodo precisa retornar uma STRING. Caso contrario, o PHP lança um Fatal Error.
	}
}

$livroZCPE = new Livro("Desenvolvendo plugins para o Moodle", "Leo Santos");
print $livroZCPE;