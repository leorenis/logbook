<?php
$hoje = new \DateTimeImmutable('now');
$amanha = $hoje->add(new \DateInterval('P1D'));
$semanaQueVem = $hoje->add(new \DateInterval('P1W'));

$hoje->setDate(2010, 12, 03); // Nao causa efeito, por ser um objeto da classe \DateTimeimutable()
var_dump($hoje);
echo nl2br("\n");
var_dump($amanha);
echo nl2br("\n");
var_dump($semanaQueVem);