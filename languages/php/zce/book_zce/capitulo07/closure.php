<?php
// Closures (ou funções anônimas) são funções que não necessitam de nome para serem criadas.

// Exemplo 1 - Closure como callback para funcao array_map();
$estilos = ["Pop", "Rock"];
array_map(function($item){
	print "$item \n";
}, $estilos);

// Exemplo 2 - Closure como variavel
$closure = function(){
	return "Ola! \n";
};
echo $closure();

// Exemplo 3 - Closure dentro de funcoes
function saudacao(){
	return function(){
		return "Bom dia \n";
	};
}
$closure = saudacao();
print $closure();

// Pegadinha
/*$x = function func($a, $b, $c) { // ISSO NAO FUNCIONA
	print "$c|$b|$a\n";
}
print $x(1,2,3);*/

// Exemplo 4 - Escopo das closures
$nome = "Leo Santos";
$saudacao = function() use ($nome) {
	print "\n";
	return "Bom dia, ".$nome;
};
print $saudacao();

// Exemplo 5 - Passando argumentos para uma closure e utilizando escopo ao mesmo tempo

$nome = "Leo Renis";
$saudacao = function($pronomeTratamento) use ($nome){
	print "\n";
	return "Bom dia, $pronomeTratamento $nome";
};

print $saudacao("Sr.");