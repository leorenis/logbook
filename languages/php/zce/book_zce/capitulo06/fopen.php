<?php
// Manipulando arquivo com fopen('arquivos/', r);
$arquivo = fopen("arquivos/r.txt", 'r');
fwrite($arquivo, "My name is Leo Santos.");
print fgets($arquivo);
fclose($arquivo);

// Exemplo com escrita de 5 bytes em um arquivo.
$meuArquivo = fopen('arquivos/w.txt', 'w');
fwrite($meuArquivo, 'Esse é o conteúdo da minha string', 4);
fclose($meuArquivo);