<?php
/**
* is_executable — Diz se um arquivo é executável.
* Retorna TRUE se o nome do arquivo existe e é executável, ou FALSE em erro.
*/

$file = '/home/leo/arquivo.sh';

if(is_executable($file)) {
    echo $file.' Is executable.';
} else {
    echo $file.' It isn\'t executable.';
}
