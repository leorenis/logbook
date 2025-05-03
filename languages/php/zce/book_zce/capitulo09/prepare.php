<?php
$nome = 'LEO RENIS';

$pdo = new \PDO('mysql:host=localhost;db_name=db_zce','root','');

$query = $pdo->prepare('SELECT * FROM usuarios WHERE nome like :nome');
$query->execute([':nome' => $nome]);
$dados = $query->fetch(PDO::FETCH_ASSOC);
print_r($dados);