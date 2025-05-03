<?php
/*O método __invoke() é chamado quando um script tenta chamar um objeto como uma função.*/
class Computador{
	public function __invoke(){
		print "Metodo __invoke executado! \n";
	}
}

$pc = new Computador;
$pc();

/* Podemos também passar argumentos, além de executar nosso objeto como função. */
class ParametrosDinamicos{
	public function __invoke(){
		print "Preparando para receber parametros \n";
		foreach (func_get_args() as $parametro) {
			print "Parametro: ". $parametro ."\n";
		}
	}
}

$listarParametros = new ParametrosDinamicos();
$listarParametros(1, 2, "Tres");

/** 
* Podemos também limitar a quantidade de argumentos, para 2 por exemplo.
* Escolhendo esse tipo de sintaxe, torna-se obrigatório a passagem dos parâmetros, assim como em um método ou em uma função
*/
class ParametrosLimitados {
	function __invoke($parametro1, $parametro2){
		print "$parametro1 e $parametro2";
	}
}
$parametros = new ParametrosLimitados;
$parametros("Guitarra", "Violao");