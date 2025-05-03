<?php
$this = "Hello"; // Isso gera um PHP Fatal error: Cannot re-assign $this.

class Arquivo {
	private $arquivo = 'zend.txt';
	public function exibirNome()
	{
		print $arquivo; // Tentando acessar uma propriedade sem utilizar a palavra reservada $this
	}
}
$arquivo = new Arquivo();
$arquivo->exibirNome(); // PHP Notice: Undefined variable: arquivo