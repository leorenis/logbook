<?php
/**
* spl_autoload_functions — Retorna todas as funções __autoload() registradas
* Esta função retorna um array com todas as funções __autoload registradas. Se a pilha de autoload não estiver ativa, o retorno é false. Se nenhuma função estiver registrada, o retorno será um array vazio.
*/
var_dump(spl_autoload_functions());