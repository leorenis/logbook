<?php
echo date('z'); // dia do ano 0-365
echo nl2br("\n");
echo date('j/n/o'); // Dia/Mes/Ano. Porem para dia e mes, nao considera o 0 da esquerda. O 'o' numero do ano

// Classe DateTime
$datetime = new DateTime();
echo nl2br("\n");
echo $datetime::ATOM;
echo nl2br("\n");
echo $datetime::COOKIE;
echo nl2br("\n");
echo $datetime::RFC822;