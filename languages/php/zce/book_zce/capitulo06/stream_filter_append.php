<?php
// Aplicando um filtro
$fp = fopen("arquivos/texto.txt", "r");
stream_filter_append($fp, 'string.toupper');
print fread($fp, 1024);