<?php
$pdo = new \PDO("mysql:host=localhost;dbname=db_zce", 'root', '');
print $pdo->exec("SELECT * FROM usuarios;"); // Retorna apenas a quantidade de linhas afetadas. SAIDA: 0