<?php
/**
* Lê o grupo do arquivo.
* Retorna o group ID do arquivo, ou FALSE no caso de um erro. O group ID é retornado em um formato numérico. 
*/
$filename = '../arquivos/texto.txt';
if (file_exists($filename)) {
    echo "Grupo: ". filegroup($filename);
}