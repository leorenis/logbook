<?php
$array = array();
$array[] = 'a';
$array[] = 'b';
$array[] = 'c';
$array[] = 'd';
$array[] = 'e';
unset($array[4]); // Chave [4] deixa de existir, nesse caso.
$array[] = null;
$array[50] = 'g';
$array[] = 'h';
$array['a'] = 'i';
$array[] = 'j';
$array[40] = 'k';
$array[] = 'm';

print_r($array);