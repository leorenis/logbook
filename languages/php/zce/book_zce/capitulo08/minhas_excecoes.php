<?php
class NumeroInvalidoException extends Exception{

}

/**
* Testa classe NumeroInvalidoException
*/
class TestaNumeroInvalidoException
{
	private $numero;

	function __construct($numero){
		$this->numero = $numero;
		try {
			$this->testar();
		} catch (NumeroInvalidoException $numeroInvalidoException) {
			print $numeroInvalidoException->getMessage();	
		}
	}

	public function testar(){
		if(!is_numeric($this->numero)){
			throw new NumeroInvalidoException('Variavel $numero nao e um numero!', 1);
		}
	}
}

$teste = new TestaNumeroInvalidoException('a');