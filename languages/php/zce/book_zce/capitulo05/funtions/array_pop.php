<?php
// Remove o ultimo elemento do array.
$pessoas = ["Joao", "Marina", "Tiago", "Falecido"];

// Precisamos retirar o falecido da lista de pessoas. 
array_pop($pessoas);

var_dump($pessoas);