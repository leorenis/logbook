<?php
class ModeloDeDados 
{
	private $db;
	public function __construct(){
		$this->db = new \PDO('mysql:host=localhost;dbname=db_zce', 'root', '');
	}

	public function salvar(){
		try {
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->db->beginTransaction();
			$this->db->exec("INSERT INTO usuarios (nome, email) VALUES ('PEDRO PAULO', 'leorenis@gmail.com');");
			$this->db->exec("UPDATE usuarios set nome='LEO RENIS' WHERE id=1;");

			$this->db->commit();
			print "Dados salvos com sucesso!";

		} catch (PDOException $excecao) {
			$this->db->rollBack();
			print $excecao->getMessage();
		}
	}

	public function __destruct() {
        $this->db = null;
        echo "Fechando conexao";
    }
}

$dados = new ModeloDeDados();
$dados->salvar();
