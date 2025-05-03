<?php
$hash = password_hash("ZCPE", PASSWORD_DEFAULT);
$senha = "Z.CPE";
if(password_verify($senha, $hash)){
	echo 'It´s OK';
}