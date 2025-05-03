<?php
$senha = password_hash('ZCPE', PASSWORD_DEFAULT);
echo "PASSWORD_DEFAULT: ". $senha. "\n";

$senha = password_hash('ZCPE', PASSWORD_BCRYPT);
echo "PASSWORD_BCRYPT: ". $senha;