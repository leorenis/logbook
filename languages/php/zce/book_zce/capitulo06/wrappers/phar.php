<?php
// Os arquivos .phar surgiram com o conceito similar a arquivos .jar em Java. Ou seja, um arquivo .phar é usado para distribuir uma aplicação completa em PHP, tornando assim fácil sua utilização e não havendo a necessidade de nenhuma configuração extra.
$filepath = getcwd()."\arquivos\phpunit-5.5.4.phar";
$phar = new \RecursiveTreeIterator(
	new RecursiveDirectoryIterator("phar://$filepath")
);

foreach ($phar as $iterator) {
	print $iterator->current();
}