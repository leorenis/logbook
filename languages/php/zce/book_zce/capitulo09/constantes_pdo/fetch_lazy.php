<?php
// O \PDO::FETCH_LAZY é uma combinação dos modos \PDO::FETCH_BOTH e \PDO::FETCH_CLASS. Com isso, podemos acessar os dados retornados como arrays associativos (informando nome da coluna), arrays enumerativos (onde cada coluna representa um número começando do zero) ou como objeto. veja o exemplo:
$pdo = new \PDO('mysql:host=localhost;dbname=db_zce', 'root', '');
$prepare = $pdo->prepare("SELECT * FROM usuarios;");
$prepare->execute();
$usuarios = $prepare->fetch(\PDO::FETCH_LAZY);

print $usuarios->id; // Objeto
print $usuarios['id']; // Associativo
print $usuarios[0]; // Enumerativo

//print_r($usuarios);

/** Além disso, o resultado retornado do banco de dados é encapsulado em um objeto PDORow , que é produzido apenas no momento em que é acessado. Por isso, o seu nome possui a palavra LAZY , que significa preguiçoso. Ou seja, os registros só são de fato retornados no momento em que são acessados. Isso faz com que o metodo fetchAll perca o sentido para esse MODO. Por isso se tentarmos utilizar o metodo fetchAll, o PHP lancara um PHP Warning error.*/

// Ex:
$usuarios = $prepare->fetchAll(\PDO::FETCH_LAZY); // ISSO NAO FUNCIONA - PHP Warning | LAZY + fetchAll = PHP Warning
print_r($usuarios);