<?php
// Ao utilizar o modo \PDO::FETCH_NAMED colunas com o mesmo nome, é criado um array com o nome da coluna (no nosso caso nome ) com os valores repetidos dentro desse array.
$pdo = new \PDO('mysql:host=localhost;dbname=db_zce', 'root', '');
$prepare = $pdo->prepare('SELECT u.nome, p.nome, u.email FROM usuarios AS u INNER JOIN permissao AS p on u.id = p.usuarios_id;');
$prepare->execute();
print_r($prepare->fetchAll(\PDO::FETCH_NAMED));

// A regra e: Nomes iguais em JOINs de tabelas aparecerão em um array como valor da chave com o nome da coluna.