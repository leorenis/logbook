<?php
interface a
{
    const b = 'Interface constant';
}

// Imprime: Interface constant
echo a::b;


// Isto não funcionará porque não é permitido sobreescrever constantes.
class b implements a
{
    const b = 'Class constant';
}