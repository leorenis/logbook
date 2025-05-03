<?php
/*Teste com valores na tabela ASCII. Lembre-se, maiusculas na tabela ASCII começa com A==65 e a== 97. Comparação das strins da esquerda pra direita. */
$p = "PHP";
$P = "php";

echo ($p < $P) + 2 * ($p > $P) + 3 * ($p == $P);


/*Detalhe interessante com STRINGs. Dessa vez usando o construtor de linguagem echo.*/
print "\n";
echo "22" + "0.2", 23 . 1;

/*O que acontece e:
* 1. Executa a soma de 22 + 0.2 = 22.2
* 2. Executa a cocatenção de 23 e 1. Que no PHP, concatenação naturalmente gera uma string.
* 3. Imprime as strings da esquerda para a direita. Sendo que a função echo permite a separação de itens por virgula. Resultado: 22.2231
*/