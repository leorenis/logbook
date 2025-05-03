<?php
interface a
{
    public function foo();
}

interface b extends a
{
    public function baz(Baz $baz);
}

// Isto irá funcionar
class c implements b
{
    public function foo()
    {
    }

    public function baz(Baz $baz)
    {
    }
}

// Isto não irá funcionar e resultará em um erro fatal
class d implements b
{
    public function foo()
    {
    }

    public function baz(Foo $foo) // Baz deve ser compativel com o parametro da interface b
    {
    }
}