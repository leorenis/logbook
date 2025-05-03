<?php
// TimeZone America/Sao_Paulo
$saopaulo = new \DateTime('now', new \DateTimeZone("America/Sao_Paulo"));
print $saopaulo->format($saopaulo::ATOM);
echo nl2br("\n");

// TimeZone Pacific/Auckland
$aukland = new \DateTime('now', new \DateTimeZone("Pacific/Auckland"));
print $aukland->format($aukland::W3C);
echo nl2br("\n");
// Padrao do PHP.ini
$padrao = new \DateTime();
print $padrao->getTimeZone()->getName();