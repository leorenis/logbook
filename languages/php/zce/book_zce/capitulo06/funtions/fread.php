<?php
/**
* fread — Leitura binary-safe de arquivo.
fread() lê até length bytes do ponteiro de arquivo informado em handle. A leitura é interrompida quando uma das seguintes condições são satisfeitas:

length bytes foram lidos
EOF (end of file - final do arquivo) é alcançado
um pacote tornou-se disponível (para network streams)
8192 bytes foram lidos (depois de abrir um stream)
*/

// lê o conteúdo do arquivo para uma string
$filename = '../arquivos/texto.txt';
$handle = fopen ($filename, "r");
$conteudo = fread ($handle, filesize ($filename));
echo $conteudo;
fclose ($handle);