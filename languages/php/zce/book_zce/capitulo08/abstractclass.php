<?php
abstract class WebService{
	abstract function tratarRequisicao();
	abstract function tratarResposta();
}

class WebServiceJson extends WebService{
	public function tratarRequisicao(){
		return print "Trata uma requisicao JSON \t";
	}
	public function tratarResposta(){
		print "Trata uma resposta JSON";
	}
}

class WebServiceXml extends WebService{
	public function tratarRequisicao(){
		return print "Trata uma requisicao XML \t";
	}
	public function tratarResposta(){
		print "Trata uma resposta XML";
	}
}

// Gerencia requisicoes do tipo JSON
$json = new WebServiceJson();
$json->tratarRequisicao();
$json->tratarResposta();

print "\n";

// Gerencia requisicoes do tipo XML
$xml = new WebServiceXml();
$xml->tratarRequisicao();
$xml->tratarResposta();

// ATENÇÃO: CLASSES ABSTRATAS NÃO podem ser INSTANCIADAS. Caso tente instância-la, um FATAL ERROR é exibido;