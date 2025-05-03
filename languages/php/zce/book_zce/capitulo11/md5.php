<?php
 // Calcula o "hash MD5" de uma string. Se o opcional raw_output é definido para TRUE, então o md5 é ao invés retornado no formato binário com um tamanho de 16. Padrão para FALSE.
$texto = "Certificação PHP";
$md5 = md5($texto);

if ($md5 == md5($texto)) {
	print 'Os textos são iguais';
}