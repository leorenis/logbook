<?php
/**
* 
*/ 
class a 
{ 
	public $val; 
}

function renderVal (a $a) 
{ 
	if ($a) { 
		echo $a->val; 
	} 
} 
renderVal (new a());