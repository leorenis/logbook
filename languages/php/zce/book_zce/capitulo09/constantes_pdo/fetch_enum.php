<?php
/**
* com o modo \PDO::FETCH_NUM é retornado um array enumerativo de cada linha do banco de dados.
*/
$pdo = new \PDO('mysql:host=localhost;dbname=db_zce', 'root', '');
$prepare = $pdo->prepare('SELECT * FROM usuarios;');
$prepare->execute();
print_r($prepare->fetchAll(\PDO::FETCH_NUM));