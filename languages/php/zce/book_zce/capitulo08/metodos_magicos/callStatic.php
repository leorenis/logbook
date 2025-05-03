<?php
class Carro{
	public static function __callStatic($metodo, $argumentos)
	{
		print 'Metodo invocado estaticamente: Carro::' .$metodo. '();';	
	}
}
Carro::ligar();