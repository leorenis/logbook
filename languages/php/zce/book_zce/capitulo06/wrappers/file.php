<?php
echo file_get_contents('arquivos/arquivo_wapper_file.txt'); // Quando nenhum wrapper for especificado, o PHP vai usar o padrão file:// implicitamente.

$filepath = getcwd()."\arquivos\arquivo_wapper_file.txt";

print file_get_contents("file://$filepath"); // Wrapper file://alvo sendo utilizando explicitamente