<html>
<body>
	<table border="1" width="50%" align="center">
		<thead>
			<tr align="center">
				<td>Obter produto</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<a href="../sql_injection/exemplo1.php?pagina=1">Primeiro produto
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="../sql_injection/exemplo1.php?pagina=2">Segundo produto</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="../sql_injection/exemplo1.php?pagina=3">Terceiro produto</a>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>

<?php
// Verifica se a conexão foi montada com sucesso
try {
	$conn = new PDO('mysql:dbname=db_zce;host=127.0.0.1;charset=utf8', 'root', '');
} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
}
// Obtém a próxima página
$offset = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_SPECIAL_CHARS);
// Monta a instrução para selecionar os dados
$prepare = $conn->prepare("SELECT id_produto, nm_produto FROM tb_produto ORDER BY nm_produto LIMIT 20 OFFSET :offset;");
$prepare->bindValue(':offset', (int) $offset, PDO::PARAM_INT);
// Executa a instrução e obtém o resultado
if($prepare->execute()) {
	$row = $prepare->fetch(PDO::FETCH_ASSOC);
	printf ("[Identificador do produto: <strong>%s</strong>] - [Produto: <strong>%s</strong>] <br />", $row['id_produto'], $row['nm_produto']);
}

/* CODIGO COM PROBLEMA DE INJEÇÃO DE SQL 

// Verifica se a conexão foi montada com sucesso
try {
	$conn = new PDO('mysql:dbname=db_zce;host=127.0.0.1;charset=utf8', 'root', '');
} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
}
// Obtém a próxima página
$offset = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_SPECIAL_CHARS);
// Monta a instrução para selecionar os dados
$query = "SELECT id_produto, nm_produto FROM tb_produto ORDER BY nm_produto LIMIT 20 OFFSET $offset;";
// Executa a instrução e obtém o resultado
foreach ($conn->query($query) as $row) {
	printf ("[Identificador do produto: <strong>%s</strong>] - [Produto: <strong>%s</strong>] <br />", $row['id_produto'], $row['nm_produto']);
}
*/