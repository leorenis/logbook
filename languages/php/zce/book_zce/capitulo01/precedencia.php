<?php
echo 2 + 3 * 5 - 9; // Sempre a multiplicacao ou divisao é executada primeiro. Depois será executado da esquerda para a direita.
print "\n";
echo 2 + 10 / 4 - 3; // Nesse caso, primeiro efetua a divisão primeiro. Depois será executado da esquerda para a direita.
print "\n";
echo 9 - 5 + 6 / 2 * 3; // Quando aparece divisão seguido de multiplicação, será executado da esquerda para a direita. Depois a adição e subtração da esquerda para a direita.

print "\n";
echo 9 - 5 + 6 - 4 / 2 * 3 / 2; // Mesmo principio, primeiro executa multiplicacao ou divisão seguindo a ordem da esquerda para a direita, depois adição ou subtração da esquerda para a direita.
// Ex:
// 1º: 4/2 = 2 | 2*3 = 6 | 6/2 = 3    <-- Multiplicação ou divisao da esquerda pra direita
// 2º: 9-5 = 4 | 4+6 = 10|	10-3 = 7   <-- Adição e Substração da esquerda para a direita	| RESULTADO 7

print "\n";
echo 8 / 4 * 6 / 2; // LEMBRE-SE: Quando for ( / ou * ). Sera executado da esquerda pra direita. Sem priorizar operador.

// Agora, quando for multiplicacao e adicao... Primeiro a multiplicacao. O mesmo pra Divisão.
print "\n";
echo 8 + 4 - 2 * 2; // Aqui a Miltiplicacao tem prioridade. Depois da esquerda pra direita normal.

print "\n";
echo 8 - 6 + 6 / 2; // Aqui a divisao tem prioridade. Depois da esquerda pra direita normal.