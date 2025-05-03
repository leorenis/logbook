<?php
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld; // Fique ligado, essa classe possui os metodos da trait
}

$o = new MyHelloWorld();
$o->sayHello();