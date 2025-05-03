<?php
$laranja = "laranja";

echo @"${${${${laranja}}}}"; // O '@' suprimi o Notice... CAI NA PROVA
echo nl2br("\n");
echo "$laranja";
echo nl2br("\n");
echo $laranja{0}; // String também sao arrays

$frutas = ['morango', 'banana', 'melancia'=> 'melancia'];
echo nl2br("\n");
echo "A fruta mais interessante pode ser: $frutas[0]. Também pode ser $frutas[melancia]";
echo nl2br("\n");
echo $frutas{1};

// Teste de transformação de inteiro para string
$int = 048; // Vai dar erro
$var = (string) $int;
print $var;