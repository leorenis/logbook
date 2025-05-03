<?php
// Exemplo 1 - modo 'a'
// Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
$arquivo = fopen("arquivos/a_a+.txt", 'a');
fwrite($arquivo, 'Utilizando familia "a" para mandar ver nos manipuladores de arquivos...'); // E assim como ocorre no modo w+ , não recebemos nenhum WARNING, pois, caso o arquivo não exista, ele é criado.
fclose($arquivo);

// Exemplo 2 - 'a+'
// Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
$arquivo = fopen("arquivos/a_a+.txt", 'a+');
fwrite($arquivo, 'Utilizando familia "a +" para mandar ver nos manipuladores de arquivos...'); // E assim como ocorre no modo w+ , não recebemos nenhum WARNING, pois, caso o arquivo não exista, ele é criado.
fclose($arquivo);