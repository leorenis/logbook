<?php
/**
* is_dir — Diz se o caminho é um diretório. Informa se o dado nome de arquivo é um diretório.
* Retorna TRUE se o nome do arquivo existe e é um diretório, FALSE caso contrário.
*/

var_dump(is_dir('../arquivos/texto.txt'));
var_dump(is_dir('../arquivos/'));

var_dump(is_dir('..')); // um diretório acima