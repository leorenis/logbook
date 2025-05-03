<?php
$pdo = new \PDO('mysql:host=localhost;dbname=db_zce', 'root', '', [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_SILENT]);

$pdo->query("SELECT * FROM tabela_que_nao_existe");

if($pdo->errorCode()){
	$detalhes = $pdo->errorInfo();
	print sprintf('Codigo : %s, Codigo do driver : %s, Mesagem: %s',
		$detalhes[0], // Retorna o codigo de erro do banco de dados
		$detalhes[1], // Numero do erro especifico do drive
		$detalhes[2]  // Mensagem especifica do drive 
	);
}