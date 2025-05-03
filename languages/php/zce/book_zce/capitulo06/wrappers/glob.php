<?php
// Temos um wrapper específico para encontrar arquivos de um determinado padrão. Para isso, usamos glob://.
$filepath = getcwd();
$diretorio = new \RecursiveDirectoryIterator("glob://$filepath/*.php");
foreach ($diretorio as $arquivos) {
	print $arquivos->getFilename();
	print "\n";
}