<?php
/**
* spl_object_hash — Retorna uma identificação hash do objeto dado.
* Esta função retorna um identificador único para o objeto. Este identificador por ser usado como uma chave hash para guardar objetos ou para identificar um objeto.
*/

class Pessoa{

}
print_r(spl_object_hash(new Pessoa));