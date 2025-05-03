<?php
class TestaString
{
    private $string;
	public $nowdoc = <<<'EOT'
	Now doc heheh
EOT;
	
    public function setString($string)
	{
        $this->string = $string;
	}
	
	public function getString()
	{
        return $this->string;
	}
}

$str = new TestaString;
$str->setString('Oi pingo D\'gua'); // scape
$strHereDoc = new TestaString;
$interpreta = new TestaString;
$heredoc = <<<EOD
Texto heredoc
EOD;
$strHereDoc->setString($heredoc);
$strHereDoc->nowdoc;
$a = array('a'=>10, 'b'=>20);
$interpreta->setString("Numero: {$a['a']}.");
echo $interpreta->getString();
//var_dump($strHereDoc->getString());