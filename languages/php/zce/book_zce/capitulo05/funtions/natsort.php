<?php
// Ordena um array de forma natural em que os seres humanos estão acostumados.
$imagens = ["img1.png", "img12.png", "img11.png", "img7.png", "img2.png", "img6.png"];
sort($imagens);
print_r($imagens);

echo nl2br("\n");
natsort($imagens);
print_r($imagens);