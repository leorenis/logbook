<?php
// Isto não é chamado sintaxe complexa porque a sintaxe é complexa, mas sim para utilização de expressões complexas.
// Show all errors.
error_reporting(E_ALL);
class beers {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

// This works; outputs: I'd like an A & W
echo "I'd like an {${beers::softdrink}}\n";
echo nl2br("\n");
// This works too; outputs: I'd like an Alexander Keith's
echo "I'd like an {${beers::$ale}}\n";

echo nl2br("\n");

// Segundo exemplo - Variaveis variaveis
$cesta = "fruta";
$fruta = "Abacate";

echo "${${cesta}}";

// Terceiro exemplo - Multiplos ($) dolar
$ola = "mundo";
$mundo = "aqui";
$aqui = "tem";
$tem = "educacao";
$educacao = "ola";

echo "${${${${${$educacao}}}}}";
echo $$$$$$educacao;