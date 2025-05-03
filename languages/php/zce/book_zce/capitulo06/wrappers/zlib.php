<?php
// O wrapper zlib não utiliza apenas o seu nome, devemos utilizar ['compress.zlib://arquivo.tar.gz'], e o mesmo se aplica para arquivos comprimidos com bzip2.
$filepath = getcwd()."\arquivos\arquivozip.txt.gz";
file_put_contents("compress.zlib://$filepath", 'Vou ser comprimido!');