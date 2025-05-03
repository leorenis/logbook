<?php
$senha = crypt('123456', '$2a$07$136...........$');
$senhaUsuario = "123456";

echo $senha;
if (crypt($senhaUsuario, $senha) == $senha) {
	echo 'OK';
}