<?php
/**
 * Minha Classe Reflection_Method
 */
class My_Reflection_Method extends ReflectionMethod
{
    public $visibility = array();

    public function __construct($o, $m)
    {
        parent::__construct($o, $m);
        $this->visibility = Reflection::getModifierNames($this->getModifiers());
    }
}

/**
 * Demonstração classe #1
 *
 */
class T {
    protected function x() {}
}

/**
 * Demonstração classe #2
 *
 */
class U extends T {
    function x() {}
}

class PrivateMethod {
	private function myPrivateFunction(){
    	return "Hello word!";
    }
}

// Imprimir as informações
var_dump(new My_Reflection_Method('T', 'x'));

$reflectMethod = new ReflectionMethod('PrivateMethod', 'myPrivateFunction');
$reflectMethod->setAccessible(true);
echo $reflectMethod->invoke(new PrivateMethod);