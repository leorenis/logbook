<?php
$xml = simplexml_load_file('xml/pessoa.xml');
// Using xpath
$nomes = $xml->xpath("/pessoas/pessoa/nome");
echo "<pre>"; 
var_dump($nomes);
echo "</pre>"; 
echo "<pre>"; 
$pessoas = $xml->xpath("//pessoa");
var_dump($pessoas);
echo "</pre>"; 
echo "<pre>"; 
$id3 = $xml->xpath("/pessoas/pessoa/nome[@id=3]");
var_dump($id3);
echo "</pre>"; 