<?php
/*OCTAL TO DECIMAL*/
var_dump(023);
// Solucao: Da direita para esquerda. 
// 1º algarismo * a base(8) elevado a potencia equivalente a posicao do numero (Começando por 0). No final, some os resultados.
// Pratica:
// 3 * (8 ^ 0) = 3 * 1 = 3
// 2 * (8 ^ 1) = 2 * 8 = 16
// 3 + 16 = 19


/*HEXADECIMAL TO DECIMAL*/
var_dump(0x48); // 72
// Solucao: Da direita para esquerda. 
// 1º algarismo * a base(16) elevado a potencia equivalente a posicao do numero (Começando por 0). No final, some os resultados.

// Pratica:
// 8 * (16 ^ 0) = 8 * 1  = 8
// 4 * (16 ^ 1) = 4 * 16 = 64
// 8 + 64 = 72


/*Tabela de valores Hexadecimal x Decimal 
* H | D
* 0 | 0
* 1 | 1
* 2 | 2
* 3 | 3
* 4 | 4
* 5 | 5
* 6 | 6
* 7 | 7
* 8 | 8
* 9 | 9
* A | 10
* B | 11
* C | 12
* D | 13
* E | 14
* F | 15
*/