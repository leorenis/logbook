<?php
/**
* Lê todo conteudo de um arquivo para string. Esta função é semelhante à file(), exceto que file_get_contents() retorna o arquivo em uma string, começando a partir de offset até maxlen bytes. Em caso de falha, file_get_contents() retornará FALSE.
*/
$conteudo = file_get_contents('../arquivos/texto.txt');
echo $conteudo;