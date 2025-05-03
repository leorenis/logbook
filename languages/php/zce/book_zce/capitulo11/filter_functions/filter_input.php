<!DOCTYPE html>
<html>
<head>
	<title>Input_filter</title>
</head>
<body>
	<form action="" method="POST">	
		<input type="text" name="nome">
	</form>
</body>
</html>
<?php
//var_dump($_POST['nome']);
var_dump(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));