<?php
// spl_autoload_call — Tenta todas as funções __autoload() registradas para carregar a classe solicitada.

class Child extends Pai {
    public function __construct () {
        parent::__construct();
    }
}

class Pai {
    public function __construct () {

    }
}

spl_autoload_call('Child');