<?php
/**
* fileatime — Obtém o último horário de acesso do arquivo. Obtém o último horário de acesso de um dado arquivo.
*/
$filename = '../arquivos/texto.txt';
if (file_exists($filename)) {
    echo "$filename teve o ultimo acesso em: " . date ("F d Y H:i:s.", fileatime($filename));
}