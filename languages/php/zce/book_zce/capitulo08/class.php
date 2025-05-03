<?php
/**
 * Uma classe é a definicao do projeto de um objeto
 */
class Copo{
	const LIMITE = 100;
	public $tamanho;
	public $cor;

	function adicionarBebida($bebida, $quantidade){
		if($quantidade >= self::LIMITE){
			return print "A Quantidade excede o limite suportado pelo copo.";
			exit();
		}
		return print "Bebida escolhida: ".$bebida;
	}
}
// OBS: Em PHP, não conseguimos forçar nenhum tipo, como arrays, classes ou interfaces, nas propriedades dos objetos como fazemos em funções.
$copo = new Copo();
$copo->tamanho = "Medio";
$copo->cor = "Branco";
print_r($copo);
$copo->adicionarBebida("Agua", 150);
print_r(get_class_methods("Copo"));

// Acessando constante
print "\n\n Acessando constantes: \n";
print \Copo::LIMITE. "\n";
print $copo::LIMITE;