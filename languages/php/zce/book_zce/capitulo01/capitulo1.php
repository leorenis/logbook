<?php
// Capítulo 1 pagina 9: Variaveis de valor
$a = 10;
$b = $a;
$b = 20;
echo $a; // 10
echo $b; // 20
echo "\n";

// Capítulo 1 pagina 9: Variaveis de referencia
$a = "Por valor";
$b = &$a; // Criando referencia para $a.
$a = "E agora?. Gostei dessa parada de referencia :)";
$b = "Agora mudei em b."; // Se eu mudar em $b, também vai reflerir em $a
print $a;
print $b; // Tudo que eu colocar em $a, vai propagar em $b, sendo $b apenas uma referencia de $a.

// Capítulo 1 pagina 9: Caixa alta e caixa baixa em PHP
$var = 0;
if(EMPTY($var)) echo "\n Estou vazio!"; // Teste function
// Teste com classes
CLASS cachorro{
	public function latir(){
		print "\n au au au!";
	}
}
$shitsu = new CACHORRO(); // EM classes, metodos, funcoes... funciona
$shitsu->LATIR();
// OBS: Não se aplica a variaveis
$K = "\nK";
$k = 'k';
print $K. $k;

// Capítulo 1 pagina 9: Caracteres especiais
$variávelcoração = "Coração";
echo $variávelcoração;	// Isso não é recomendado

// Capítulo 1 pagina 9: Comparação
$x = 0;
$y = '0';
if($x == $y){
	echo "Sao iguais\n"; // Sao iguais
}
if($x === $y){
	echo 'Sao iguais'; // Não entra nessa condicao, pois compara tipo e valor.
}

// Capítulo 1 pagina 17: Operadores bit a bit (BITWIZE).
echo 10 << 8; // Movendo bits à esquerda. Resultado 56
echo "\n";
echo 10 >> 8; // Movendo bits à direita. Resultado 0
echo "\n";
echo ~7; // Operador de negação. Resultado -8
echo "\n";
echo ~-8; // Operador de negação. Resultado 7
echo "\n";
echo 9 & 4; // Operador AND. Resultado 0
echo "\n";
echo 5 | 2; // Operador OR.. Resultado 7
echo "\n";
echo 5 ^ 2; // Operador XOR. Resultado 1
