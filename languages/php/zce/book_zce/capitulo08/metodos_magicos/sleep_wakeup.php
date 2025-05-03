<?php
/* Quando a função serialize do PHP é chamada no objeto, o método __sleep() é invocado se existente na classe. O mesmo ocorre com o método __wakeup quando a função unserialize() é invocada.
*/
class Serializar{
	public function __sleep(){
		print "Metodo invocado ao tentar utilizar a funcao serialize() \n";
		return []; // Sempre deve retornar um array, senao um Notice é lancado.
	}

	public function __wakeup(){
		print "método invocado ao usar a função unserialize \n";
	}
}
$objetoSerializado = serialize(new Serializar());
var_dump($objetoSerializado);
unserialize($objetoSerializado);