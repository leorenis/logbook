<?php
/** Com finally, podemos garantir que o codigo dentro do bloco finally seja executado. Independente se uma exceção é lançada ou  não.
*/
class BlocoFinally {
	public function testarSemLancarExcecao(){
		try {
			
		} catch (Exception $e) {
			
		} finally {
			print "Sempre entrarei no finally, independete de excecao lancada ou nao. \n";
		}
	}

	public function testarLancandoExcecao(){
		try {
			throw new Exception("Lancamento de excecao \n", 1);
			
		} catch (Exception $excecao) { // Captura excecao lancada
			print $excecao->getMessage();
		} finally {
			print "Bloco finally executado. \n";
		}
	}
}

$blocofinally = new BlocoFinally();
$blocofinally->testarSemLancarExcecao();
$blocofinally->testarLancandoExcecao();