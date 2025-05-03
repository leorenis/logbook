<?php
/**
* Permite vincular o valor de uma coluna a uma variável PHP. Esse modo é utilizado em conjunto com o método bindColumn() , onde o resultado é atribuído à coluna escolhida.
*/
// Conexao
$pdo = new \PDO('mysql:host=localhost;dbname=db_zce', 'root', '');

$preparar = $pdo->prepare("SELECT id, nome, email FROM usuarios;");
$preparar->execute();
// Passar apenas variaveis no 2º parametro, pois a passagem é por referencia. Caso contrário um `FATAL ERROR` é exibido
$preparar->bindColumn(1, $id); 
$preparar->bindColumn(2, $nome);
$preparar->bindColumn(3, $email);

while($preparar->fetch(\PDO::FETCH_BOUND)) {
	print sprintf('%d %s %s', $id, $nome, $email);
}

// Alem do bindColumn, tambem temos os metodos bindValue e bindParam.
$email = 'leorenis@gmail.com';
$preparar = $pdo->prepare('SELECT id, nome, email FROM usuarios WHERE email = :email');
// Obtemos o mesmo resultado se utilizarmos bindParam
$preparar->bindValue(':email', $email);
$preparar->execute();
print_r($preparar->fetch(\PDO::FETCH_ASSOC));

// Como vimos, os métodos bindValue e bindParam possuem basicamente a mesma função, porém existem algumas diferenças entre eles, como o número de argumentos aceito por cada um e modo em que o valor é passado por cada um.