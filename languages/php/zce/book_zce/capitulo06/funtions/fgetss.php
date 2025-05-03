<?php
/**
* fgetss — Ler uma linha de um ponteiro de arquivo e retira as tags HTML.
* Idêntico a fgets(), exceto que fgetss() tenta retirar qualquer tag HTML ou PHP do texto que ele lê.

* Retorna uma stirng de até length - 1 bytes lidos do ponteiro do arquivo por handle, com todo HTML e código PHP removidos. Se um erro ocorrer, retorna FALSE.
*/