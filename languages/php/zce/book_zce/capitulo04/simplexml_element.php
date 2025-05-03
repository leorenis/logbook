<?php
$heredocxml = <<<XML
<alunos>
    <aluno1>
      <nome>Leo</nome>
      <email>leorenis@gmail.com</email>
    </aluno1>
    <aluno2>
      <nome>Pedro</nome>
      <email>pedro@gmail.com</email>
    </aluno2>
</alunos>
XML;
// Minha classe :)
class XMLDoLeo extends SimpleXMLElement {}

simplexml_load_string($heredocxml, "XMLDoLeo");
$lxml = new XMLDoLeo($heredocxml);

var_dump($lxml->children()->aluno1);