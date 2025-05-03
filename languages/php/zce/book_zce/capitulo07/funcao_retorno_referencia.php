<?php
// Em PHP, também é possível retornar um valor de uma determinada função por referência. Para isso, basta inserir um & antes do nome da função, e outro & para quem a está chamando.
class Casa{
	private $luz = "On";

	public function &retornarPorReferencia()
	{
		return $this->luz;
	}
}

$casa1 = new Casa();
// Na hora de chamar, utilize o &.
$luz = &$casa1->retornarPorReferencia();
print $luz; // On
$luz = "Off";

print $casa1->retornarPorReferencia(); // Off