<?php
/**
* realpath — Retorna o path absoluto canonicalizado.
* Retorna o path absoluto em sucesso. O path resultante não conterá nenhum link simbólico ou componentes '/./' e '/../'.
*/
chdir('/var/www/');
echo realpath('./../../etc/passwd');