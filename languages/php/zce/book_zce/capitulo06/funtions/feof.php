<?php
/**
* feof — Testa pelo fim-de-arquivo (eof) em um ponteiro de arquivo.
*/

$meuArquivo = fopen('../arquivos/texto.txt', 'r');
while (!feof($meuArquivo)) {
	print fgets($meuArquivo);
}
fclose($meuArquivo);