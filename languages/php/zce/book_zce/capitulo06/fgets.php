<?php
$meuArquivo = fopen('arquivos/texto.txt', 'r');
while (feof($meuArquivo) !== true) {
	print fgets($meuArquivo);
}
fclose($meuArquivo);