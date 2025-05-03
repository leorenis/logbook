<?php
function mostrartexto() {
	echo "Onde vou aparecer? \t";
	return "Sou um retorno massa... Eu vou primeiro. \t";
}
$texto = "Quero so ver se tenho prioridade... \t";
$mensagem = "Eu estou no final, sou mais idosa. Mereco respeito \t";
echo $mensagem. mostrartexto(). $texto; // LEMBRE-SE... Primeiro 'monte' a string a ser apresentada no 'ECHO'. Quando houver chamadas de metodos ou funcoes, o PHP resolverá a funcao (Consequentemente, se tiver um ECHO OU PRINT será executado, antes do script que o chamou...), montar a string e depois mostrar.

// Saida: 
// Onde vou aparecer? 	Eu estou no final, sou mais idosa. Mereco respeito 	Eu sou um retorno massa... Eu vou primeiro. 	Quero so ver se tenho prioridade... 	