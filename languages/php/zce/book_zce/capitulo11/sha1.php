<?php
// Calcula a hash sha1 de uma string. Se o parâmetro opcional raw_output for TRUE, então o resultado é retornado em um formato binário com o tamanho de 20.
$senha = '123456';
$senhaHash = sha1('123456');
if( ( !is_null($senha) && ( sha1($senha) == $senhaHash ) ) === true
	) {
	echo $senhaHash;
} else {
	echo "OPS";
}