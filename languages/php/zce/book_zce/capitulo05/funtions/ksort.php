<?php
/**
 * Ordena um array pelas suas cheves. Esse tipo de comportamento é muito interessante quando estamos trabalhando com arrays associativos.
*/
$blocos = array("A"=>"CASA 81", "C"=>"CASA 82", "B"=>"CASA 83");
ksort($blocos);
print_r($blocos);