<?php
class Celular{
	protected function ligarTela($segundos){
		return print "Ligando a tela do celular por $segundos segundos...";
	}

	public function __call($metodo, Array $argumentos){
		print "Metodo ". $metodo. "() invocado com os argumentos: ";
		foreach ($argumentos as $argumento) {
		 	print $argumento;
		 }
		 print "\n";
	}
}

$lgG4 = new Celular();
$lgG4->ligar();

$motoG = new Celular();
$motoG->definirNumero('61 1234-1234');
$motoG->ligarTela(5); // FIQUE LIGADO... VAI CAIR NO __CALL, pois o metodo ligarTela é protegido e nao acessivel fora da hierarquia da classe Celular.