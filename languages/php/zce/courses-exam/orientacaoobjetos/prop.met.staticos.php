<?php
/**
* Atributos e metodos estaticos nao representam o objeto, mas sim a classe.
*/
class Pessoa
{
	public static $type;
	public $id;

	public function __construct($id){
		// $this diz a respeito do objeto que está sendo utilizado, nao a classe. Nunca use em contexto estatico (use o curinga self)
		// Independente da hierarquia, $this referencia o objeto que está sendo utilizado. Não importa onde ele foi utilizado.
		$this->id = $id;
	}
}

// Static referencia a classe, não o objeto.
Pessoa::$type = 'Fisica';

$maria = new Pessoa(123);
$mario = new Pessoa(456);
$meury = new Pessoa(789);

var_dump($maria, $mario, $meury);
var_dump($maria::$type, $mario::$type, $meury::$type);