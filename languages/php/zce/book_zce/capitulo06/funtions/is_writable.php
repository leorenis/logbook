<?php
/**
* is_writable — Diz se o arquivo pode ser modificado.
* Retorna TRUE se o arquivo em filename existe e pode ser modificado. O argumento filename pode ser um diretório, permitindo que você verifique se o diretório tem permissão de escrita.
*/
$filename = '../arquivos/texto.txt';
if (is_writable($filename)) {
    echo 'O arquivo possui permissão de escrita';
} else {
    echo 'O arquivo não possui permissão de escrita';
}