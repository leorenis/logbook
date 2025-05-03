<?php
/**
* O PDO nos fornece uma maneira bem simples de retornarmos objetos em vez de arrays, através da constante \PDO::FETCH_OBJ.
*/
$pdo = new \PDO('mysql:host=localhost;dbname=db_zce', 'root', '');
$preparar = $pdo->prepare('SELECT id, nome, email FROM usuarios');
$preparar->execute();
print_r($preparar->fetchAll(\PDO::FETCH_OBJ));