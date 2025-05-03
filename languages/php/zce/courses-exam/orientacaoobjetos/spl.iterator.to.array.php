<?php
/**
* iterator_to_array — Copia o iterador em um array.
* Retorna o número de elementos em iterator.
*/

$first = new ArrayIterator( array('k1' => 'a' , 'k2' => 'b',  'k3' => 'c',  'k4' => 'd') ); 
$second = new ArrayIterator( array( 'k1' => 'X', 'k2' => 'Y', 'Z' ) ); 

$combinedIterator= new AppendIterator(); 
$combinedIterator->append( $first ); 
$combinedIterator->append( $second ); 

var_dump( iterator_to_array($combinedIterator, $use_keys = false) );
var_dump( iterator_to_array($combinedIterator, $use_keys = true) );