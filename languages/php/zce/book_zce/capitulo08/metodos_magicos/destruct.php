<?php
class Agenda{
	public function __construct(){
		print "Construindo objeto. \n";
	}

	public function __destruct(){
		print "Destruindo objeto. \n";
	}
}

$agenda = new Agenda();
sleep(1);

unset($agenda); // Objeto agenda sendo destruido
sleep(2); // Após esse tempo, a execução do script é finalizada.