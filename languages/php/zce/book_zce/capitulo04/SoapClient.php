<?php
$cliente = new SoapClient('http://www.byjg.com.br/site/webservice.php/ws/cep?WSDL');
var_dump($cliente->__getFunctions());
print_r($cliente->obterLogradouro('72020530'));