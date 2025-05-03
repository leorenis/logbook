<?php
/**
* modo \PDO::FETCH_CLASS trabalha da mesma maneira que o \PDO::FETCH_OBJ , porém, ao usarmos \PDO::FETCH_CLASS , é possível especificar qual o tipo de objeto queremos que o PDO nos retorne os dados. Para o nosso exemplo, vamos construir uma classe com o nome Usuario para representar os registros da tabela usuarios.
*/
$pdo = new \PDO('mysql:host=localhost;dbname=db_zce', 'root', '');

$preparar = $pdo->prepare("SELECT * FROM usuarios;");
$preparar->execute();
print_r($preparar->fetchAll(\PDO::FETCH_CLASS, 'Usuario'));


class Usuario{
	private $id;
	public $nome;
}

// Um comportamento interessante quando usamos \PDO::FETCH_CLASS é que não necessariamente precisamos definir as propriedades da classe com o mesmo nome dos campos na tabela, pois o PHP faz isso automaticamente para nós. 