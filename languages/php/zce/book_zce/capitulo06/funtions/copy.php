<?php
// Copia arquivo
// Faz uma cópia do arquivo source para dest. Se você quiser mover um arquivo, utilize a função rename().
// Retorna TRUE em caso de sucesso ou FALSE em caso de falha.

$file = 'example.txt';
$newfile = 'example.txt.bak';

if (!copy($file, $newfile)) {
    echo "falha ao copiar $file...\n";
}