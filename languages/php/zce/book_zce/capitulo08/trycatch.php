<?php
class ValidaMaiorNumero{
	
	public function validarMaiorNumero($primeiroNumero, $segundoNumero){
		if($primeiroNumero < $segundoNumero){ // Se cair nessa condição o PHP Lança a Exceção.
			throw new Exception("Primeiro numero maior que o segundo!", 1);
		}
		else if($primeiroNumero === $segundoNumero){
			throw new InvalidArgumentException("Os numeros nao devem ser iguais!", 1);
		}
	}

	public function testar($primeiroNumero, $segundoNumero){
		try {
			$this->validarMaiorNumero($primeiroNumero, $segundoNumero);
		} catch (Exception $excecao) {
			print $excecao->getMessage();
		} catch (InvalidArgumentException $excecaoComArgumentoInvalido) {
			$excecaoComArgumentoInvalido->getMessage();
		}
	}
}

$validador = new ValidaMaiorNumero();
$validador->testar(2, 2);