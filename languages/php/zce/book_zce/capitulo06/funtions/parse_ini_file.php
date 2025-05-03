<?php
/**
* parse_ini_file — Interpreta um arquivo de configuração.
* parse_ini_file() carrega o arquivo INI especificado em filename e retorna as configurações contidas nele em um array associativo.
* As configurações são retornadas como um array associativo.
*/
$conf = parse_ini_file('../../capitulo11/php_zce_security.ini');
print_r($conf);