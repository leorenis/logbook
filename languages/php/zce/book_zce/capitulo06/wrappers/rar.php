<?php
// Para utilizarmos rar:// , devemos nos atentar às suas peculiaridades. Para manipularmos arquivos do tipo .rar , precisamos instalar a extensão responsável por manipulá-los.

// Exemplo
$diretorio = new \RecursiveTreeIterator(new RecursiveDirectoryIterator('rar:///foo/bar/meu_arquivo.rar#'));
foreach ($diretorio as $arquivo) {
	print $arquivo;
}