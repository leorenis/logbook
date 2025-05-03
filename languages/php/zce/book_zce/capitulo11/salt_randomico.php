<?php
function salt_randomico() {
	return substr(sha1(mt_rand()),0,22);
}

$senha = "123456";
$salt_randomico = salt_randomico();
$hash_senha = sha1($salt_randomico . $senha);
echo "Hash Senha: $hash_senha Salt Rand: $salt_randomico Senha: $senha";