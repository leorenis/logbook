<?php
// Mostra os registros tanto com o nome nas colunas quanto como indice de um array enumerativo.
$pdo = new \PDO('mysql:host=localhost;dbname=db_zce', 'root', '');
$prepare = $pdo->prepare('SELECT * FROM usuarios LIMIT 1;');
$prepare->execute();
print_r($prepare->fetchAll(\PDO::FETCH_BOTH));