<?php
$arquivo = fopen("arquivos/w+.txt", "w+"); // Se arquivo nao existir, criará um novo... 
fwrite($arquivo, "Apenas Leo Santos será permitido..."); // Esse modo "w+" nao preserva nada de conteudo do arquivo. Zera o arquivo e inicia a gravação com o ponteiro no início do arquivo.
fclose($arquivo);