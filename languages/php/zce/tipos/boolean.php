<?php
class TestaBoolean
{
    private $valor;
	
    public function setValor($valor)
	{
        $this->valor = $valor;
	}
	
	public function getValor()
	{
        return $this->valor;
	}
	
	public function testaValor($obj)
	{
		return (bool) $obj;
	}
}

class Vazia
{
}
$vazia = new Vazia;
$tb = new TestaBoolean;

var_dump($tb->testaValor($vazia));