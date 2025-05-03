<?php
/**
* Lê uma linha de um ponteiro de arquivo. Retorna uma linha do ponteiro do arquivo.
*/

$meuArquivo = fopen('../arquivos/texto.txt', 'r');
while (feof($meuArquivo) !== true) {
	print fgets($meuArquivo);
}
fclose($meuArquivo);