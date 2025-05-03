<?php
trait Log{
	public function gravar($mensagem){
		return file_put_contents("arquivos/log.txt", $mensagem);
	}
}

class GerenciadorDeLogs
{
	use Log;

	public function gravar(){	// ESSE Método sobrescreve o metodo da trait. Fique ligado.
		print "Oi, estou passando na frente do seu metodo...";
	}
}
$hoje = new \DateTime("now");
$gerenciadorDeLog = new GerenciadorDeLogs();
$gerenciadorDeLog->gravar("Mensagem de Log ". $hoje->format('d/m/Y h:i:s')); // método existente no trait.