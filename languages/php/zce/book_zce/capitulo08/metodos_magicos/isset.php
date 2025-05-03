<?php
/* __isset() é disparado ao chamar a função isset() ou empty() em propriedades inacessíveis ou inexistentes. */
class Colecao{
	private $dados = [];

	public function __set($indice, $valor){
		print "Atribuindo o indice $indice com o valor $valor \n";
		$this->dados[$indice] = $valor;
	}

	public function __isset($nome){
		print "Verifica se $nome foi definido. A resposta e: ";
		return array_key_exists($nome, $this->dados);
	}
}

$colecao = new Colecao();
$colecao->nome = "Leo";	
$colecao->idade = "24";

// Verifica se o nome existe
var_dump(isset($colecao->nome));