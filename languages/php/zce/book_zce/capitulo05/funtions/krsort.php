<?php
/**
 * Ordena um array pelas suas cheves. Utiliza o padrão da MAIOR para a MENOR. Essa é a diferença da sua irmã ksort().
*/
$blocos = array("A"=>"CASA 81", "C"=>"CASA 82", "B"=>"CASA 83");
krsort($blocos);
print_r($blocos);