<?php
/**
* fclose — Fecha um ponteiro de arquivo aberto. O arquivo apontado por handle é fechado.
* Retorna TRUE em caso de sucesso ou FALSE em caso de falha.

* O ponteiro para o arquivo tem que ser válido e tem que apontar para um arquivo aberto por fopen() ou fsockopen().
*/
$handle = fopen('qualquerarquivo.txt', 'r');
fclose($handle);