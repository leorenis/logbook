<?php
// Cap�tulo 1 pagina 9: Variaveis de valor
$a = 10;
$b = $a;
$b = 20;
echo $a; // 10
echo $b; // 20
echo "\n";

// Cap�tulo 1 pagina 9: Variaveis de referencia
$a = "Por valor";
$b = &$a; // Criando referencia para $a.
$a = "E agora?. Gostei dessa parada de referencia :)";
$b = "Agora mudei em b."; // Se eu mudar em $b, tamb�m vai reflerir em $a
print $a;
print $b; // Tudo que eu colocar em $a, vai propagar em $b, sendo $b apenas uma referencia de $a.

// Cap�tulo 1 pagina 9: Caixa alta e caixa baixa em PHP
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
// OBS: N�o se aplica a variaveis
$K = "\nK";
$k = 'k';
print $K. $k;

// Cap�tulo 1 pagina 9: Caracteres especiais
$vari�velcora��o = "Cora��o";
echo $vari�velcora��o;	// Isso n�o � recomendado

// Cap�tulo 1 pagina 9: Compara��o
$x = 0;
$y = '0';
if($x == $y){
	echo "Sao iguais\n"; // Sao iguais
}
if($x === $y){
	echo 'Sao iguais'; // N�o entra nessa condicao, pois compara tipo e valor.
}

// Cap�tulo 1 pagina 17: Operadores bit a bit (BITWIZE).
echo 10 << 8; // Movendo bits � esquerda. Resultado 56
echo "\n";
echo 10 >> 8; // Movendo bits � direita. Resultado 0
echo "\n";
echo ~7; // Operador de nega��o. Resultado -8
echo "\n";
echo ~-8; // Operador de nega��o. Resultado 7
echo "\n";
echo 9 & 4; // Operador AND. Resultado 0
echo "\n";
echo 5 | 2; // Operador OR.. Resultado 7
echo "\n";
echo 5 ^ 2; // Operador XOR. Resultado 1
