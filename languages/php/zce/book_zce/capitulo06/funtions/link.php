<?php
/**
* Criando um hard link.
* Retorna TRUE em caso de sucesso ou FALSE em caso de falha.
*/

$target = 'source.ext'; // Esse arquivo já existe
$link = 'newfile.ext'; // Esse é o nome do link

link($target, $link);