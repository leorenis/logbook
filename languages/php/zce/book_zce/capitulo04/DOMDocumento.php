<?php
$xml = new DOMDocument();
$xml->load("xml/pessoa.xml");

/**
* My class XML
*/
class MeuDocumentoXML extends SimpleXMLElement{}

// Importando de DOMDocumento para SimpleXMLElement
$sxml = simplexml_import_dom($xml, "MeuDocumentoXML");

var_dump($sxml);

// Tambem e possivel importar de SimpleXMLElement para DOMDocument.
$dxml = dom_import_simplexml($sxml);
var_dump($dxml);