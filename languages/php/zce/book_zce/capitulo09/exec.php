<?php
$pdo = new \PDO('mysql:host=localhost;dbname=db_zce', 'root', '');

/**
 * Inserindo linhas
 */
$linhasAfetadas = $pdo->exec( "INSERT INTO usuarios (nome, email) VALUES ('LEO RENIS', 'leorenis@gmail.com');");
print $linhasAfetadas . ' linha inserida';