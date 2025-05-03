<?php
/*__unset()  é invocado ao usar o construtor unset() em propriedades inacessíveis ou inexistentes.*/
class Colecao{
	private $dados = [];

	public function __set($propriedade, $valor){
		return $this->dados[$propriedade] = $valor;
	}

	PUBLIC function __unset($nome){ // Maiusculo funciona, mas nao e recomendado...
		// Remove a propriedade somente se ela existir no array $dados
		if(array_key_exists($nome, $this->$dados)){
			unset($this->dados[$nome]);
		}
	}
}

$colecao = new Colecao();
$colecao->b = 1;
$colecao->c = 1;

print_r($colecao);
unset($colecao->b);
print_r($colecao);