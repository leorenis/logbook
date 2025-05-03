<?php
$hoje = new \DateTime('2016-08-22 10:05:15');
$amanha = $hoje->add(new \DateInterval("P1D"));
var_dump($hoje);
echo nl2br("\n");
var_dump($amanha);
echo nl2br("\n");
// Repare que as datas de hoje e amanha são iguais. Isso acontece por que quando definimos uma nova data para o objeto \DateTime() ele perde sua data inicial. Para que isso não aconteça veja \DateTimeImmutable.php

// DEFININDO DATA
$data = new \DateTime('today'); // Passando pelo construtor
$dataDeNascimento = $data->setDate(1991, 11, 06); // Definindo data utilizando o método setDate().
$dataDeNascimentoFormatada = $data->format('d/m/Y'); // Mostra: 06/11/1991
$dataDeNascimento = $data->setTime(03, 48, 16); // Define um horário para a variavel $dataDeNascimento
$dataDeNascimentoFormatada = $data->format('g:i:s'); // Mostra: 3:48:16
$doisAnosAtras = $data->sub(new \DateInterval("P2Y")); // Subtrai dois anos

print $doisAnosAtras->format("Y-m-d"); // Mostrando alteração

$dataModificada = $data->modify("+3 year"); // Modificando data agora com o método modify().
echo nl2br("\n");
var_dump($dataModificada);

$dataModificada = $data->modify("-6 months"); // Modificando data agora com o método modify().
echo nl2br("\n");
var_dump($dataModificada);

$meuformato = \DateTime::createFromFormat('d/m/Y', '06/11/1991'); // Cria uma data a partir de um formato
echo nl2br("\n");
var_dump($meuformato);