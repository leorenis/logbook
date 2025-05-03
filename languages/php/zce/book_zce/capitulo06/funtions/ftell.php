<?php
/**
* ftell — Retorna a posição de leitura/gravação do ponteiro do arquivo. Retorna a posição do ponteiro do arquivo referenciado por handle; i.e., sua posição no stream do arquivo.
Se um erro ocorrer, retorna FALSE.
*/

// abre o arquivo e lê alguns dados
$fp = fopen("../arquivos/texto.txt", "r");
$data = fgets($fp, 12);

// onde nós estamos ?
echo ftell($fp); // 11

fclose($fp);