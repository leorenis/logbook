<?php
//goto a;
header('HTTP/1.0 200 OK');
header('Content-Type: application/json');


header('Token: meu_token');
header('Token: outro_valor', false); // Considerará multiplos cabeçalhos
header('Token1: outro_valor', false);
header('Token2: outro_valor', false);
header('Invalid-Token: meu_token', true, 401);
//a:
print_r(headers_list());