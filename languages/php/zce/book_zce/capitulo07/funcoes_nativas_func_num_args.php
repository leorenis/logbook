<?php
// Retorna o número total de argumentos passados para a função
function argumentos()
{
	return func_num_args();
}

print argumentos(1, 2, "Tres");