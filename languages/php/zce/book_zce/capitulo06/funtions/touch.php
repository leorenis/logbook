<?php
/**
* touch — Muda o tempo de modificação do arquivo. Se o arquivo não existe, ele será criado.
* Retorna TRUE em caso de sucesso ou FALSE em caso de falha.
*/

if (touch ($nomedoarquivo)) {
    print "o tempo do $nomedoarquivo foi modificado para o dia e hora atual";
} else {
    print "Desculpe, não foi possivel modificar o tempo de $nomedoarquivo";
}