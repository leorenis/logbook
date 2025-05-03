<?php
function somaDoisNumeros($a, $b){
	return $a + $b;
}
print somaDoisNumeros(5, 6);

// Função com valores pre-definidos. LEMBRE-SE, sempre deixar as variaveis com valores no final.
function ligaTelevisao($controle, $marca = "SAMSUNG", $comodo = "SALA"){
	return " \n $controle, TV $marca que esta no comodo $comodo";
}

print ligaTelevisao("Controle 1"); // ou
print ligaTelevisao("Controle 2", "LG"); // ou 
print ligaTelevisao("Controle 3", "SONY", "QUARTO");

// NUNCA USAR 
/*
function ligaTelevisao($marca = "SAMSUNG", $comodo = "SALA", $controle){ /// JAMAIS UTILIZE ISSO... NA PROVA É ZERO.
	return " \n $controle, TV $marca que esta no comodo $comodo";
}
*/