<?php
class A {
    private function foo() {
        echo "success!\n";
    }
    public function test() {
        $this->foo();
        static::foo();
    }
}

class B extends A {
   /* foo() será copiado para B, assim seu escopo ainda será A e
    * e a chamada funcionará */
}

class C extends A {
    private function foo() {
        /* método original foi substituído, escopo agora é C */
    }
}

$b = new B();
$b->test();
$c = new C();
$c->test();   //fails