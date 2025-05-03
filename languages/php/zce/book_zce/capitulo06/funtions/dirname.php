<?php
/**
* Retorna o caminho/path do diretório pai.
* A dirname() opera inocentemente com a string de entrada, e não conhece o filesystem, ou componentes de caminho (path) como o "..".
*/

 echo dirname("/etc/passwd") . PHP_EOL;
 echo dirname("/etc/") . PHP_EOL;
 echo dirname(".") . PHP_EOL;
 echo dirname("/usr/local/lib", 2);