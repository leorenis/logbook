<?php
// As resoluções de Late static bindings terminarão quando a chamada é realizada sem retorno. Por outro lado chamadas estáticas utilizando instruções como parent:: ou self:: irão repassar a informação do chamador.
class A {
    public static function foo() {
        static::who();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}

class B extends A {
    public static function test() {
        A::foo();
        parent::foo();
        self::foo();
    }

    public static function who() {
        echo __CLASS__."\n";
    }
}
class C extends B {
    public static function who() {
        echo __CLASS__."\n";
    }
}

C::test();

// A
// C
// C