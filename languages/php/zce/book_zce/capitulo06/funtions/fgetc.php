<?php
/**
* fgetc - Lê um caracter do ponteiro de arquivo. Obtém um caractere de um dado ponteiro de arquivo.
* Retorna uma string contendo um único caractere lido do ponteiro do arquivo passado por handle. Retorna FALSE em EOF.
*/
$fp = fopen('../arquivos/texto.txt', 'r');
if (!$fp) {
    echo 'Não é possivel abrir algumarquivo.txt';
}
while (false !== ($char = fgetc($fp))) {
    echo "$char\n";
}