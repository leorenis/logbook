<?php
$soapServer = new SoapServer(null, ['uri' => 'http://localhost/zce/livrozce/capitulo4']);

class MeuServico {
	public function ola()
	{
		return 'Método ola do meu serviço';
    }
}

$soapServer->setClass('MeuServico');
$soapServer->handle();