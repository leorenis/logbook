<?php
namespace App1;
class Produto{

}

namespace App2;
class Produto{
	public function __construct(){
		echo __NAMESPACE__. "\n";
		echo __CLASS__. "\n";
		echo __METHOD__. "\n";
		echo __FUNCTION__. "\n";
	}
}

namespace App3;
use App1\Produto as ProdApp1;
use App2\Produto;

// ?... Como declarar produto? Aí que entra o alias ProdApp1.
$produto = new ProdApp1(); // Obj de App1
var_dump($produto);

$produto = new Produto(); // Obj de App2
var_dump($produto);

// Outra abordagem possivel é:
$produto = new \App1\Produto(); // OBS: Por estar dentro do namespace App3, lembre de iniciar com \...
var_dump($produto);

$produto = new \App2\Produto();
var_dump($produto);