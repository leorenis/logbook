<?php
/**
* is_readable — Diz se o arquivo existe e se ele pode ser lido. Diz se o arquivo existe e se ele pode ser lido.
* Retorna TRUE se o arquivo ou diretório especificado por filename existe e pode ser lido, FALSE do contrário.
*/

$filename = '../arquivos/texto.txt';
if (is_readable($filename)) {
    echo 'O arquivo pode ser lido.';
} else {
    echo 'O arquivo não pode ser lido.';
}