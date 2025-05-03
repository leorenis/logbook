<?php
$arquivo = fopen("arquivos/r+.txt", 'r+'); // Se arquivo nao existir, lança um WARNING
fwrite($arquivo, "Atualizando..."); // Inicia a escrita com o ponteiro no início do arquivo. A partir daí, subscreve os caracteres seguintes.
fclose($arquivo);