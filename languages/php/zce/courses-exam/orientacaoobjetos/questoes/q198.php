<?php
function increment (&$val) 
{ 
	return $val + 1; 
} 
$a = 1; 
echo increment ($a);
echo increment ($a);