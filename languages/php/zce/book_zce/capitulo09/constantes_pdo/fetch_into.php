<?php
/**
* O modo \PDO::FETCH_INTO atua basicamente como o \PDO::FETCH_CLASS , no qual conseguimos especificar uma classe para que o PDO nos devolva os registros do banco de dados do tipo que desejamos.
Temos que nos atentar apenas em algumas diferenças. Repare no novo modo em que definimos como o PDO nos devolverá os dados. Dessa vez, utilizamos o método setFetchMode , onde informamos o tipo que desejamos no primeiro parâmetro e, como segundo parâmetro, os objetos que desejamos que ele nos retorne.
*/
$pdo = new \PDO('mysql:host=localhost;dbname=db_zce', 'root', '');
$preparar = $pdo->prepare('SELECT id,nome,email FROM usuarios');
$preparar->setFetchMode(\PDO::FETCH_INTO, new Usuario());
$preparar->execute();
print_r($preparar->fetchAll());

class Usuario {}

// Com o modo \PDO::FETCH_INTO , devemos obrigatoriamente usar o método setFetchMode ; caso contrário, uma exceção será lançada.

// A diferença entre usar a \PDO::FETCH_CLASS ou \PDO::FETCH_INTO está no uso do $this . Enquanto \PDO::FETCH_INTO nos permite informar que queremos que o PDO nos retorne o tipo da instância atual do objeto (através do $this ), o FETCH_CLASS só nos permite informar strings como segundo parâmetro. O modo \PDO::FETCH_CLASS só aceita o tipo string como segundo parâmetro.

/** Abordagem 2

* Ao utilizarmos o modo \PDO::FETCH_INTO , temos uma flexibilidade bem grande, pois podemos utilizar $this para referenciar a própria classe que estamos usando para resgatar os dados, sem criar nenhuma classe auxiliar para representar os registros.
*/
class Registro{
	private $pdo;
	public function __construct(){
		$this->pdo = new \PDO('mysql:host=localhost;dbname=db_zce', 'root', '');
	}

	public function getUsuarios(){
		$prepare = $this->pdo->prepare("SELECT id,nome,email FROM usuarios;");
		$prepare->setFetchMode(\PDO::FETCH_INTO, $this); // LEMBRE-SE, obrigatorio quando utiliza o modo FETCH_INTO.
		$prepare->execute();
		return $prepare->fetch();
	}
}

$registro = new Registro();
var_dump($registro->getUsuarios());