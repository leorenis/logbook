<?php
//abs() — Valor absoluto. Retorna o valor absoluto do number. Se o argumento número é do tipo float, o número retornado também é float,
//  em outro caso será inteiro (mas poderá retornar float se o resultado tiver magnitude maior que inteiro).
echo "<br />". abs(-4.2);

// acos() — Cosseno Inverso (arco cosseno). Retorna o inverso do cosseno de arg em radianos. acos() é a função complementar de cos(), 
// o que significa que a==cos(acos(a)) para qualquer valor de var que esteja dentro dos limites de acos().
echo "<br />". acos(0);

// acosh() — Cosseno Hiperbólico Inverso. Retorna o cosseno hiperbólico de arg, isto é, o valor cujo coseno hiperbólico é arg.
// Nota: esta função não é implementada na plataforma Windows
echo "<br />". acosh(4);

// asin() — Seno Inverso (arco seno).
echo "<br />". asin(-1);

// asinh() — Seno Hiperbólico Inverso. Retorna o inverso do seno hiperbólico de arg, isto é, o valor cujo seno hiperbólico é arg.
// Nota: esta função não é implementada na plataforma Windows
echo "<br />". asinh(4);

//atan2() — Tangente inversa de duas variáveis
echo "<br />". atan2(1, 2);

// atan() — Tangente Inversa (arco tangente)
echo "<br />". atan(2);

// atanh() — Tangente hiperbólica inversa. Nota: esta função não é implementada na plataforma Windows
echo "<br />". atanh(2);

// base_convert() — Converte um número entre bases arbitrárias
echo "<br />".base_convert ($number = 'a37334',$frombase = 16, $tobase = 2);

// bindec() — Binário para decimal
echo "<br />".bindec("000110011");

var_dump(boolval([])); 

var_dump(boolval(new stdClass()));

// ceil() — Arredonda frações para cima
echo "<br />".ceil(5.49);
echo ceil(-3.14);

// cos() retorna o coseno de arg. O parâmetro arg deve estar em radianos.
echo "<br />".cos(M_PI);

// cosh() — Cosseno hiperbólico. Retorna o cosseno hiperbólico de arg, definido por (exp(arg) + exp(-arg))/2.
echo "<br />".cosh(-1);

// decbin() — Decimal para binário. Retorna uma string contendo a representação binária do parâmetro number. 
// O maior número que pode ser convertido é '4.294.967.295' em decimal, resultando em uma strings de 32 números 1.
echo "<br />". decbin(4294967295); //11111111111111111111111111111111

// dechex — Decimal para hexadecimal. Retorna uma string contendo a representação hexadecimal do argumento number. 
// O maior número que pode ser convertido é 4294967295 em decimal, resultando em "ffffffff".
echo "<br />". dechex(4294967295); // ffffffff

// decoct() — Decimal para octal. Retorna uma string contendo a representação octal do parâmetro number. 
// O maior número que pode ser convertido é 4294967295 em decimal, resultando em "37777777777".
echo "<br />". decoct(4294967295);

// deg2rad() — Converte o número em graus ao equivalente em radianos. Esta função converte number de graus ao equivalente em radianos.
echo "<br />". decoct($number = 45);

// exp() — Calcula o expoente de e. Retorna e a potência de arg. NOTA: 'e' é a base do sistema natural de logaritmos, ou aproximadamente 2.718282.
echo "<br />". exp($number = 12);

// expm1() — Retorna exp(numero) - 1, computado de forma que é preciso mesmo quando o valor do número é perto de zero.
// Nota: esta função não é implementada na plataforma Windows
echo "<br />". expm1($arg = 12);

// floor() — Arredonda frações para baixo. Retorna o próximo menor valor inteiro ao se arredondar para baixo o valor, se necessário.
echo "<br />". floor(9.999); // 9

// fmod() Retorna o resto de ponto flutuante (modulo) da divisão dos argumentos.
echo "<br />". fmod($x = 5.7, $y = 1.3); // 0.5

// getrandmax() — Retorna o maior valor aletório possível. Retorna o valor máximo que pode ser gerado em uma chamada a função rand().
echo "<br />".getrandmax(); // 2147483647

// hexdec() — Hexadecimal para decimal. Retorna o decimal equivalente do número hexadecimal representado pelo argumento $hex_string. 
// hexdec() converte uma string hexadecimal para um número decimal. hexdec() irá ignorar qualquer caracter não hexadecimal que encontrar. Ou seja, diferente de (a,b,c,d,e,f)
echo "<br />".hexdec("See");

// hypot() retorna o tamanho da hipotenusa de um ângulo reto do triângulo com lado de tamanho x e y, ou a distância do ponto (x, y) de uma origem. 
// O equivalente a sqrt(x*x + y*y).
echo "<br />".hypot ($x =2, $y = 2);

// intdiv() Retorna o quociente inteiro da divisão do dividendo por divisor.
echo "<br />".intdiv($dividend =5 , $divisor = 2);

// is_finite() — Verifica se um valor é um número finito legal na plataforma PHP.
// Retorna TRUE se $val é um número finito legal dentro do limite permitido para um float do PHP na plataforma, caso contrário FALSE.
var_dump(is_finite ($val=4294967296));

// is_infinite() — Retorna TRUE se $val é infinito (positivo ou negativo), como por exemplo o resultado de log(0) ou qualquer outro valor muito grande para caber num float desta plataforma.
var_dump(is_infinite ($val=log(0)));

// is_nan — Verifica se um valor não é um número. Retorna TRUE se $val é 'não é um numéro', caso contrário FALSE.
var_dump(is_nan ($val = acos(1.01)));

// lcg_value() - Gerador congruente linear combinado. Retorna um pseudo número aleatório nos limites de (0, 1).
// A função combina duas congruências geradas, com períodos de 2^31 - 85 e 2^31 - 249. O período desta função é igual ao produto de ambos os primos.
echo "<br />". lcg_value();

//log10() — Logaritmo Base-10. Retorna o logaritmo na base-10 de $arg.
echo "<br />". log10($arg = 3);

// log — Logaritmo natural. Se o parâmetro opcional $base for informado, log() retorna log de $arg na base $base, senão log() retorna o logaritmo natural de $arg.
echo "<br />". log($arg = 3);	

// max() — Localiza o maior valor. Se o primeiro e único parâmetro é um array, max() retorna o maior valor do array. 
// Se no mínimo dois parâmetros são fornecidos, max() retornará o maior desses valores. Verificar a riqueza dessa funçao: http://php.net/manual/pt_BR/function.max.php
echo "<br />". max(2, 3, 1, 6, 7); // 7

// min() — Encontra o menor valor. Se o primeiro e único argumento é um array, min() retorna o menor valor no array. 
// Se no mínimo dois parâmetros são fornecidos, min() retornará o menor deles. Verificar a riqueza dessa funçao: http://php.net/manual/pt_BR/function.max.php
echo "<br />".min('string', array(2, 5, 7), 42); // string

// mt_getrandmax() — Retorna o maior valor aletório possível. Retorna o maior valor que pode ser obtido numa chamada a mt_rand().
echo "<br />".mt_getrandmax();

//mt_rand() — Gerador melhorado de números aleatórios
echo "<br />".mt_rand(5, 15);

//mt_srand() — Semeia o gerador melhorado de números aleatórios com $seed ou com um valor aleatório se nenhum $seed é dado.
echo "<br />".mt_srand($seed = 10);

// octdec() — Octal para decimal. Retorna o decimal equivalente do número octal representado pelo argumento $octal_string.
echo "<br />".octdec('77');

// pi — Obtém o valor de pi. Retorna uma aproximação de pi. O retornado float tem uma precisão baseado na diretiva precision no php.ini, onde o padrão é 14.
// Também, você pode usar a constante M_PI que tem resultado idêntico a pi().
echo "<br />".pi();

//rad2deg() — Converte o número em radianos para o equivalente em graus
echo "<br />".rad2deg($number = M_PI_4); // 45

// rand() — Gera um inteiro aleatório
echo "<br />".rand($min = 5, $max = 15);

//round() — Arredonda um número
echo "<br />".round(3.5); // 4
echo round(3.6, 0);      // 4
echo round(1.95583, 2); // 1.96

// sin() retorna o seno do parâmetro $arg. O argumento arg deve estar em radianos.
echo "<br />".sin(60);

// sinh() — Seno hiperbólico. Retorna o seno hiperbólico de $arg, definido como (exp(arg) - exp(-arg))/2.
echo "<br />".sinh($arg = 30);

// sqrt() — Raiz quadrada. Retorna a raiz quadrada de $arg.
echo "<br />".sqrt($arg = 25);

// srand() — Semeia o gerador de números aletórios. Semeia o gerador de números aleatórios com $seed ou com um valor aleatório se $seed não é dado.
echo "<br />".srand($seed = 5);

//tan() — Tangente. tan() retorna a tangente do parâmetro $arg. O argumento arg deve estar em radianos.
echo "<br />".tan(M_PI_4); // 1

//tanh() — Tangente hiperbólica. Retorna a tangente hiperbólica de arg, definida como sinh(arg)/cosh(arg).
echo "<br />".tanh(M_PI_4); // 1