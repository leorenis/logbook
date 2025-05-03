<?php
// Temos exatamente o mesmo comportamento em ambos modos, tanto no x como no x+ . Por meio desses modos, conseguimos ter um controle maior ao ler um arquivo caso ele já exista, pois um WARNING é lançado se o arquivo existir.

// Exemplo 1 - modo 'x'
// Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. 
$arquivo = fopen('arquivos/x.txt', 'x');
fwrite($arquivo, 'Gravando arquivo com o modo "x".');	// Se arquivo ja existir lança um Warning. Se nao existir ele cria.
fclose($arquivo);

// Exemolo 2 - Modo 'x+'
// Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.
$arquivo = fopen('arquivos/x+.txt', 'x+');
fwrite($arquivo, 'Gravando arquivo com o modo "x+".');
fclose($arquivo);