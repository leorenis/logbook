<?php
class Number { 
	private $v = 0; 
	public function __construct($v) { $this->v = $v; } 
	public function mul() { 
		return function ($x) { return $this->v * $x; }; 
	} 
} 
$one = new Number(1); 
$two = new Number(2); 
$double = $two->mul()->bindTo($one); 
echo $double(5); 