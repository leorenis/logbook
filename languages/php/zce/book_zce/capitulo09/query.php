<?php
$pdo = new \PDO('mysql:host=localhost;dbname=db_zce', 'root', '');

$pdoStatement = $pdo->query('SELECT * FROM usuarios;'); 
// Veja, o Retorno do metodo query() é um PDOStatement. Que a partir desse objeto, acessamos o bando de dados.
print_r($pdoStatement);
// Resgatando dados
$usuarios = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
print_r($usuarios);