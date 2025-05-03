<?php
/**
* tmpfile — Cria um arquivo temporário. Cria um arquivo temporário com um nome único em modo de leitura-gravação (w+) e retorna o manipulador do arquivo.
* Retorna o manipulador de arquivo, similar ao retornado pela fopen(), para o novo arquivo, ou FALSE em falha.
*/

$temp = tmpfile();
fwrite($temp, "escrevendo no arquivo temporario");
fseek($temp, 0);
echo fread($temp, 1024);
fclose($temp); // isto remove o arquivo