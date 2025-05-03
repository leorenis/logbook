<?php
/**
* Checa se um arquivo ou diretório existe.
*/
$filename = '../arquivos/texto.txt';

if (file_exists($filename)) {
    echo "O arquivo $filename existe";
} else {
    echo "O arquivo $filename não existe";
}