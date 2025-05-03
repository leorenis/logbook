<?php
$dom = new DOMDocument();
$dom->load('xml/pessoa.xml');

$xpath = new DOMXpath($dom);
$nomes = $xpath->query('//pessoas/pessoa/nome');

$pessoas = $xpath->query('//pessoa');

$id3 = $xpath->query('//pessoas/pessoa[@id=5]');

print_r($nomes);
print_r($pessoas);
print_r($id3);