<?php
// addcslashes
$mystring = "Essa é a string de teste";
echo addcslashes($mystring, 'A..z');	// E\s\s\a é \a \s\t\r\i\n\g \d\e \t\e\s\t\e

// addslashes
$mystring = "Pingo D'Água";
echo "<br />".addslashes($mystring);	// Pingo D\'Água

// bin2hex() - Converte um dado binário em representação hexadecimal
$binary = "Leo";
echo "<br />".bin2hex($binary); // saida 4c656f

// hex2bin() Converte uma representação hexadecimal para uma string binária
echo "<br />".hex2bin( $str = "4c656f"); // Se str for um hexadecial invalido aparece um warning | Saida Leo

// chop()
$mystring = "chop() - Apelido de rtrim(). Remove espaco vazio a direita de uma string.     ";
echo "<br />".chop($mystring);

// chr
// NOTE: chr() - Retorna um caracter especifico. Recebe como parametro um int da tabela ASCII
echo "<br />".chr(97);

// ord() - Retorna o valor ASCII do caractere. Complementa a funcao chr().
echo "<br />".ord("a");

// chunk_split - Divide uma string em pequenos pedaços
echo "<br />". chunk_split($mystring, 5, " * ");

// base64_encode() e base64_decode() - Codifica e decodifica dados com MIME base64
$strb64 = base64_encode("Testando encode base 64");
echo "<br />". base64_decode($strb64);

// convert_cyr_string() - Converte um conjunto de caracteres cirílicos para outro 
$strcyr = convert_cyr_string("АБВГҐДЂЃЕЁЄЖЅЗИІЇЙЈКЛЉМНЊОПРСТЋЌУЎФХЦЧЏШЩЪЫЬЭЮЯ", "a", "w");
echo "<br />". $strcyr;

// convert_uudecode() - Decodifica uma string codificada com uuencode 
$struuedec = convert_uudecode("+22!L;W9E(%!(4\"$`\n`");
echo "<br />". $struuedec;

// convert_uuencode() - Codifica uma string usando o algoritmo uuencode.
$struuenc = convert_uuencode("I Love PHP");
echo "<br />". $struuenc;

// count_chars() - Retorna informações sobre os caracteres usados numa string.
$strcountc = count_chars("I Love PHP",$mode=3);
echo "<br />". $strcountc;

/* crc32() Gera o polinômio cyclic redundancy checksum de 32-bit de comprimento do str.
 * É usado geralmente para validar a integridade de um dado sendo transferido.
*/
echo "<br />"; printf("%u\n", crc32("Ele continua sendo bom!"));

// crypt() Encriptação unidirecional de string (hashing);
echo "<br />" .crypt("MyPassword", $salt = '$2$LEO');

// echo Exibe uma ou mais strings
echo "<br />","String1","String2";

// explode() divide uma string em strings
$mystring = "Mergulhando nas explosoes de string";
$arr = explode(" ", $mystring, 2);
echo "<br />"; var_dump ($arr); 

/* fprintf() — Escreve uma string formatada para um stream
Requer um ponteiro de arquivo tipo resource tipicamente criado por fopen().
 Exemplo de uso. 
if (!($fp = fopen('date.txt', 'w'))) {
    return;
}
fprintf($fp, "%04d-%02d-%02d %02d:%02d:%02d", date('Y'), date('m'), date('d'), date('h'), date('i'), date('s'));
// will write the formatted ISO date to date.txt
*/

// htmlentities() converte todos os caracteres aplicáveis em entidades html
$mystring = "<br />Essa é uma 'string' que saiu de um <strong>editor de texto</strong> por exemplo.";
echo "<br />". htmlentities($mystring, $quote_style = ENT_QUOTES, $charset = 'UTF-8', $double_encode = true);

//htmlspecialchars() — Converte caracteres especiais para a realidade HTML
echo "<br />". htmlspecialchars($mystring, $quote_style = ENT_QUOTES, $charset = 'UTF-8');

// get_html_translation_table() — Retorna a tabela de tradução usada por htmlspecialchars() e htmlentities()
$tradutor = get_html_translation_table(HTML_ENTITIES, $quote_style = ENT_COMPAT);
echo "<br />".strtr($mystring, $tradutor); // Exemplo de uso da tabela de traducao

// hebrev — Converte texto lógico Hebraico para texto visual
echo "<br />".hebrev( $hebrew_text = "אֱלֹהִים", $max_chars_per_line = 50);

// html_entity_decode() Converte todas as entidades HTML para os seus caracteres. 
// html_entity_decode() é o oposto da função htmlentities() no que converte todas as entidades HTML para os seus caracteres de string.
$strhtmlentities = "I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now";
echo "<br />".html_entity_decode($strhtmlentities, $quote_style = ENT_COMPAT, $charset = 'utf-8');

// htmlspecialchars_decode() - Converte especiais entidades HTML para caracteres
// As entidades convertidas são: &amp;[&], &quot;["] (quando ENT_NOQUOTES não é usado), &#039;['] (quando ENT_QUOTES é usado), &lt; [<] e &gt;[>]
$strhtmlentities = "&lt;br /&gt;Essa &eacute; uma &quot;string&quot; que saiu de um &lt;strong&gt;editor de texto&lt;/strong&gt; por exemplo.";
echo "<br />".htmlspecialchars_decode($strhtmlentities, $quote_style = ENT_COMPAT);

// implode() - junta elementos de um array em uma string
echo "<br />". implode(", ", array("Leo", "Pedro", "Maria"));

// join() - sinonimo da funcao implode(). Junta elementos de um array em uma string
echo "<br />". join(", ", array("Leo", "Pedro", "Maria", "Com join *-*"));

// lcfirst() - torna minusculo o primeiro caractere de uma string
echo "<br />". lcfirst("STRING COM O PRIMEIRO CARACTERE MINUSCULO.");

// levenshtein() - Calcula a distância Levenshtein entre duas strings. Na pratica calcula quantos caracteres serao alterados para deixar as strings iguais
// Ex: levenshtein("cat","can"); Resultado 1
echo "<br />". levenshtein("cat", "can");

echo "<br />";
// localeconv() - Retorna uma matriz associativa contendo informação de formatação numérica. localeconv() retorna dados baseados na localidade corrente definida por setlocale().
setlocale(LC_ALL, "pt_BR");
var_dump(localeconv());

// ltrim() - Retira espaços em branco (ou outros caracteres) do início da string
$mystring = "	Minha string com espaço a esquerda.";
echo "<br />".ltrim($mystring, "A..Z");

// md5_file() -  Calcula hash md5 de um dado arquivo
echo "<br />".md5_file("date.txt", $raw_output = FALSE);

// md5() -  Calcula o "hash MD5" de uma string e Retorna o hash como um número hexadecimal de 32 caracteres.
echo "<br />".md5("Léo Renis", $raw_output = FALSE);

// metaphone() — Calcula a metaphone key de uma string
echo "<br />".metaphone("Eu sou Leo Santos");

//money_format() — Formata um número como uma string de moeda | IS UNDEFINED IN WINDOWS
/*$money = 1386900.00;
echo "<br />".money_format('',$money);*/

// nl_langinfo() // Retorna informações de linguagem e local. | Função nao implementada na plataforma windows
/*echo "<br />".nl_langinfo(ERA);*/

// nl2br() Insere quebra de linha HTML (<br />) antes de todas as newlines (novas linhas) em uma string.
$mystring = "\n Essa é minha string \n com algumas newlines.\n";
echo nl2br($mystring);

// number_format() - formata um numero com os milhares agrupados | Nao aceita 3 parametros. Somente 1, 2 ou 4.
$money = 1386900.00;
echo nl2br(number_format($money, 2, ',','.')."\n"); // Saida = 1.386.900,00

// parse_str() - Converte string em variaveis. Converte str como se ela tivesse sido passada via URL e define o valor das variáveis.
$strvalues = "nome=leo&endereco=TagSul";
parse_str($strvalues);
echo $nome, " " ,$endereco;

// print - Mostra uma string. print não é atualmente uma função real (é uma construção da linguagem) então você não precisa usar parênteses com ela.
// Seu valor de retorno é sempre 1.
print "<br />print() também funciona sem parênteses.
As qubras de linha
funcionam também.";

// printf(); Mostra uma string formatada. Produz uma saída de acordo com format, o qual é descrito na documentação para sprintf().
printf("<br />%d", "17,999");

//sprintf() — Retorna a string formatada. Retorna uma string produzida de acordo com a string de formatação do parametro format.
echo "<br />". sprintf("Meu nome é: %s, tenho %d anos de idade, moro em %s", $nome, $idade=24, $endereco);

// quoted_printable_encode() — Converte uma string de 8 bits em uma string quoted-printable
echo "<br />".quoted_printable_encode("quoted_printable_encode()-> Converte uma string de 8 bits em quoted-printable.");

// quoted_printable_decode() - Converte uma string quoted printable para uma string de 8 bit
echo "<br />".quoted_printable_decode("quoted_printable_decode()-> Converte uma string quoted printable para uma string de 8 bit.");

// quotemeta() - Adiciona uma barra invertida antes dos metacaracters. 
// Retorna uma versão de str com uma barra invertida (\) antes de cada um destes caracteres: '. \ + * ? [ ^ ] ( $ )'
echo "<br />".quotemeta("Essa é minha string com metacaracteres '[^], + e ?.' recebendo barra invertida.");

//rtrim() — Retira espaço em branco (ou outros caracteres) do final da string
echo "<br />".rtrim("Essa minha string com espaço em branco no final. Colocando em pratica o rtrim()		");

//setlocale() — Define informações locais
setlocale (LC_ALL, 'pt_BR');

// sha1_file() — Calcula a hash sha1 de um arquivo
// Calcula a hash sha1 de filename usando »Secure Hash Algorithm 1, e retorna um hash. A hash é um número hexadecimal de 40 caracteres.
echo "<br />".sha1_file("date.txt", $raw_output = FALSE);

// sha1() - Calcula hash sha1 de uma string.
echo "<br />".sha1("Léo Renis", $raw_output = FALSE);

// similar_text() - Calcula a similaridade entre duas strings
$percentual = TRUE;
echo  "<br /> Similar Text. Caracteres iguais nas strings: ". similar_text($str1 = "Léo Renis", $str2 = "Léo Santos", $percentual). " Porcentagem de igualdade: {$percentual}%";

// soundex() - Calcula a chave soundex de uma string
echo  "<br />Chave soundex da string 'Eu sou Leo Santos': ". soundex("Eu sou o Leo Santos");

/* sscanf() - Interpreta a entrada de uma string de acordo com um formato.
 A função sscanf() é análoga a printf(). sscanf() lê da string str e interpreta ela de acordo com o formato especificado. 
 Como é descrito na documentação para sprintf().*/
list($serial) = sscanf("SN/2350001","SN/%d");
echo "<br />SERIAL: ". $serial."<br />";

// Exemplo que pega informação do autor e gera uma entrada de DocBook
$auth = "24\tLewis Carroll";
$n = sscanf($auth,"%d\t%s %s", $id, $first, $last);
echo "<author xml:id='$id'>
    <firstname>$first</firstname>
    <surname>$last</surname>
</author><br />";

// str_getcsv() — Analisa uma string CSV e retorna os dados em um array
var_dump(str_getcsv('logs.csv'));

//str_replace() — Substitui todas as ocorrências da string de procura com a string de substituição
//Esta função retorna uma string ou um array com todas as ocorrências de search em subject substituídas com o valor dado para replace.
//Esta função é case-sensitive. Use str_ireplace() para substituição case-insensitive.
echo "<br />". str_replace($search = "bonitão", $replace = "virtuoso", $subject = "O Léo Renis é um cara bonitão.", $count);

// Deixando um pouco mais interessante.
$frase  = "você comeria frutas, vegetais, e fibra todos os dias.";
$saudavel = array("frutas", "vegetais", "fibra");
$saboroso   = array("pizza", "batata", "sorvete");
echo "<br />". str_replace($search = $saudavel, $replace = $saboroso, $subject = $frase, $count);
echo "  <- Essa estring sofreu {$count} alterações. Sua versao original: ".$frase; 

//str_ireplace() — Versão que não diferencia maiúsculas e minúsculas de str_replace().
echo "<br />". str_ireplace($search = "BONITAO", $replace = "simpático", $subject = "O Léo Renis é um cara bonitao.", $count);

//str_pad() —  Preenche uma string para um certo tamanho com outra string.
//Esta função retorna a string input preenchida na esquerda, direita ou ambos os lados até o tamanho especificado. 
//Se o parâmetro opcional pad_string não for indicado, input é preenchido com espaços, se não é preenchido com os caracteres de pad_string até o limite.
echo "<br />". str_pad($input = "String original", $pad_length = 50, $pad_string = ".", $pad_type = STR_PAD_BOTH); // STR_PAD_LEFT ou STR_PAD_RIGHT

//str_repeat() — Repete uma string
echo "<br />". str_repeat($input = "*-", $multiplier=15);

//str_rot13 — Executa a transformação rot13 em uma string
//A codificação ROT13 simplesmente troca cada letra por 13 lugares no alfabeto, enquanto não muda os caracteres não-alfa. 
//Codificação e decodificação são feitos pela mesma função, passando uma string codificada como argumento retornará a string com a versão original.
echo "<br />". str_rot13($str = "LEO SANTOS");//Saida: YRB FNAGBF
echo "<br />". str_rot13($str = "YRB FNAGBF");//Saida: LEO SANNTOS

//str_shuffle() — Mistura uma string aleatoriamente
echo "<br />". str_shuffle($str = "LEO SANTOS");

// FIQUE LIGADO
echo "<br />";
var_dump('hello'. 1 + 2 .'34'); // Saída // 234

//str_split() — converte uma string para um array
// Se $split_length < 0, retorna false, Se > $str entao a string inteira retorna no primeiro e unico elemento.
echo "<br />";
var_dump(str_split($str = "Brasileiro", $split_length = 2)); 

// str_word_count() — Retorna informação sobre as palavras usadas em uma string. Conta o número de palavras dentro de string.
// Aplicação simples
$str_words = "Algumas palavras";
echo "<br /> A string '{$str_words}' tem ".str_word_count($str_words)." palavras<br />";
// Aplicação elaborada
// $format = 1.  retorna um array contendo todas as palavras encontradas dentro de string. 
// $format = 2. etorna um array associativo, onde a chave é a posição numérica da palavra dentro da string e o valor é a própria palavra.
// $charlist recebe uma lista de caracteres adicionais que serão considerados como 'palavra'.
var_dump(str_word_count($str_words, $format = 2, $charlist=false));

//strcasecmp — Comparação de strings sem diferenciar maiúsculas e minúsculas segura para binário
// Retorna < 0 se str1 é menor do que str2; > 0 se str1 é maior do que str2, e 0 se forem iguais.
$str1 = "Ele"; $str2 = "ele";
echo "<br /> strcasecmp()".strcasecmp($str1, $str2);
$str1 = "Você"; $str2 = "Ele";
echo "<br /> strcasecmp()".strcasecmp($str1, $str2);
$str1 = "Ele"; $str2 = "Você";
echo "<br /> strcasecmp()".strcasecmp($str1, $str2);

//strcmp — Comparação de string segura para binário. Note que esta função diferencia maiúsculas e minúsculas.
// Retorna < 0 se str1 é menor do que str2; > 0 se str1 é maior do que str2, e 0 se forem iguais.
$str1 = "Ele"; $str2 = "ele";
echo "<br />strcmp()".strcmp($str1, $str2);
$str1 = "ela"; $str2 = "ela";
echo "<br /> strcmp()".strcmp($str1, $str2);
$str1 = "Você"; $str2 = "Ele";

// strstr() — Encontra a primeira ocorrencia de uma string. Retorna a parte da string, ou FALSE se needle não é encontrado.
// Se before_needle TRUE (o padrão é FALSE), strstr() retorna a parte de haystack antes da primeira ocorrência de needle.
$email  = 'name@example.com';
echo "<br />". strstr($haystack = $email, $needle = '@', $before_needle=false); // Significados: haystack= palheiro | needle = agulha | before = antes

// strchr — Sinônimo de strstr()
echo "<br />". strchr($haystack = $email, $needle = '@', $before_needle=true); // Significados: haystack= palheiro | needle = agulha | before = antes

//stristr() — strstr() sem diferenciar maiúsculas e minúsculas
echo "<br />". stristr($haystack = "NAME@EXAMPLE.COM", $needle = 'example', $before_needle=true); // Significados: haystack= palheiro | needle = agulha | before = antes

// strcoll() — Comparação de string baseada no local. Retorna < 0 se str1 é menor do que str2; > 0 se str1 é maior do que str2, e 0 se forem iguais.
// strcoll() usa o local atual para fazer as comparações. Se o local atual for C ou POSIX, esta função é equivalente à strcmp().
// Note que esta função diferencia maiúsculas e minúsculas, e diferentemente de strcmp() esta função não é segura para binário.
echo "<br />". strcoll($str1="Brazileiro", $str2="brasil");

//strcspn() — Encontra o tamanho do segmento inicial que não contenha a máscara
echo "<br />Tamanho do segmento inicial que nao contenha a mascara: ".strcspn($str1 ="leo santos", $str2="sant"/*, $start=0, $length=5*/); // result = 4 (Mostra o total de chars ate encontrar o primeiro char da str2 na str1, se nao encontrar retorna total de chars da str1).

//strspn() — Encontra o comprimento do segmento inicial combinando com a máscara
echo "<br /> Comprimento do segmento inicial combinando com a máscara: ".strspn($str1 ="42 is the answer...", $str2="42 ", $start=0, $length=20); // result = 3 (Mostra total de chars da str2 na str1 começando do inicio).

//strip_tags() — Retira as tags HTML e PHP de uma string
echo "<br />".strip_tags("<strong>Teste do strip_tags - Removendo a tag strong</strong>", $allowable_tags = false);

//stripcslashes() — Desfaz o efeito de addcslashes()
echo "<br />".stripcslashes(addcslashes("Essa é a string de teste", 'A..Z'));

// stripslashes — Desfaz o efeito de addslashes()
echo "<br />".stripslashes('Pingo D\'Água');

//strlen() — Retorna o tamanho de uma string
echo "<br /> A String [Léo Renis Santos] tem ".strlen("Léo Renis Santos")." Caracteres.";

//strnatcasecmp() — Comparação de strings sem diferenciar maiúsculas/minúsculas usando o algoritmo "natural order". 
// Esta função implementa um algoritmo de comparação de strings alfanumérico do jeito que um ser humano faz. 
// Similar a outras funções de comparação de string, esta aqui retorna < 0 se str1 é menor do que str2; > 0 se str1 é maior do que str2, e 0 se forem iguais.
echo "<br />". strnatcasecmp("ela","Ele");

// strnatcmp() — Comparação de strings usando o algoritmo "natural order"
echo "<br />". strnatcmp("ela","Ela");
//Esta função implementa um algoritmo de comparação de strings alfanumérico do jeito que um ser humano faz, isto é descrito como "ordem natural". 
//Um exemplo da diferença entre este algoritmo e os algoritmos regulares de ordenação (usado em strcmp()) pode ser visto abaixo:
$arr1 = $arr2 = array("img12.png","img10.png","img2.png","img1.png");
echo "<br />Comparacao de string padrao\n";
usort($arr1,"strcmp");
print_r($arr1);
echo "<br />Comparacao usando ordem natural\n";
usort($arr2,"strnatcmp");
print_r($arr2);


//strncasecmp() — Comparação de string caso-sensitivo de Binário seguro dos primeiros n caracteres
// Esta função é similar a strcasecmp(), com a diferença que você pode especificar o (o limite mais elevado de) número de caracteres de cada string para
// ser usado na comparação.
echo "<br />".strncasecmp($str1 = 'Ele', $str2 = 'ela', $len = 2); // result: 0

//strncmp() — Comparação de string segura para binário para os primeiros n caracteres. Note que esta função diferencia maiúsculas e minúsculas.
// Se qualquer uma das strings é menor do que $len, então o tamanho desta string será usado para comparação.
echo "<br />".strncmp($str1 = 'Ele', $str2 = 'ela', $len = 2); // result: -1

//strpbrk() — Procura na string por um dos caracteres de um conjunto. strpbrk() busca na string $haystack por uma $char_list.
// Retorna uma string iniciando do caractere encontrado, ou FALSE se ele não é encontrado.
$texto = "This is a Simple text.";
echo "<br />". strpbrk ( $haystack = $texto, $char_list = "S" );

//strpos() — Encontra a posição da primeira ocorrência de uma string. Retorna a posição numérica da primeira ocorrência de $needle dentro de $haystack. 
// Diferentemente de strrpos(), esta função pode ter uma string inteira como o parâmetro needle e toda a string será usada.
echo "<br /> Primeira ocorrencia da string [abc] esta na posicao: ". strpos($haystack='abc', $needle = 'a'); // result 0

// strrpos() — Encontra a posição da última ocorrência de um caractere em uma string.
echo "<br /> Ultima ocorrencia da string [abcbac] esta na posicao: ". strrpos($haystack='abcbac', $needle = 'b'); // result 3

// stripos() — Encontra a primeira ocorrencia de uma string sem diferenciar maiúsculas e minúsculas
echo "<br />Primeira ocorrencia da string [leo@teste.com.br] esta na posicao: ".stripos($haystack='leo@teste.com.br', $needle = '@');

//strripos() — Encontra a posição da última ocorrência de uma string case-insensitive em uma string
echo "<br />Ultima ocorrencia da string [ababcd] esta na posicao: ".strripos($haystack='ababcd', $needle = 'aB', $offset = 0);

//OBS: Estas duas funções anteriores podem retornar o booleano FALSE, mas também podem retornar um valor não-booleano que pode ser avaliado como FALSE, como 0 ou "". 
//Utilize o operador === para testar o valor retornado por estas funções. [strpos(), stripos()].

//strrchr() — Encontra a ultima ocorrência de um caractere em uma string. Retorna FALSE se $needle não for encontrado. 
// Esta função retorna a parte de $haystack que inicia na última ocorrência de $needle e vai até o fim de $haystack.
// Se $needle conter mais de um caractere, apenas o primeiro é usado. Se $needle não for uma string, é convertido para uma string e é aplicado o valor do caractere.
echo "<br />".strrchr($haystack="Ocorrencia de um caractere em uma string", $needle="r");

//strrev() — Reverte uma string. Retorna a string revertida.
echo "<br />". strrev("Hello world!"); // mostra "!dlrow olleH"

// strtok() — Tokeniza uma string. strtok() divide uma string (str) em strings menores (tokens), com cada token sendo delimitado por qualquer caractere de token.
echo "<br />";
$mystring = "Esta é uma string de exemplo";
// Note que só a primeira chamada a strtok usa o argumento string. Cada chamada subseqüente a strtok só precisa do delimitador a ser usado,
//  já que ele mantém o caminho de onde ele está na string atual.
$tok = strtok($mystring, $token = " "); $i =0;
while ($tok !== FALSE) // Utilize o operador === para testar o valor retornado por esta função.
{
	$i ++;
	echo "Parte $i: [".$tok."] ";
	$tok = strtok(" ");
}

//strtolower() — Converte uma string para minúsculas.
echo "<br />".strtolower($str = "I LOVE POTATOES");

// strtoupper() — Converte uma string para maiúsculas
echo "<br />".strtoupper($str = "i love potatoes");

// strtr() — Traduz certos caracteres. Retorna uma cópia de $str, traduzindo todas ocorrências de cada caractere em $from para correspondentes caracteres em $to.
//Exemplo #1
echo "<br />".strtr("Fishe gostosos", "Fish", "Peixes");

// Exemplo #2 strtr() exemplo com dois argumentos
$trans = array("hello" => "hi", "hi" => "hello");
echo "<br />".strtr("hi all, I said hello", $trans);

// substr_compare() — A comparação binária entre duas strings de um offset até o limite do comprimento de caracteres
echo "<br />".substr_compare($main_str = "abcde", $str = "BC", $offset = 1, $length = 2, $case_insensitivity = true); // 0

// substr_count() — Conta o número de ocorrências de uma substring
echo "<br />".substr_count($haystack = "This is a test", $needle = "is", $offset = 3, $length = 10);

// substr_replace() — Substitui o texto dentro de uma parte de uma string. substr_replace() substitui uma cópia de $string delimitada pelos parâmetros 
// $start e (opcionalmente) $length com a $string dada em replacement.
echo "<br />". substr_replace($string = "String completa com substring para substituir.",$replacement = 'inteira' ,$start=7, $length=8);

// substr() — Retorna uma parte de uma string. Retorna a parte de string especificada pelo parâmetro start e length.
echo "<br />". substr('abcdef', 1, 3);  // bcd
echo "<br />". $string{strlen($string)-1}; // Result: f

// trim() — Retira espaço no ínicio e final de uma string
// Opcionalmente, os caracteres removidos pode também ser especificados usando o parâmetro charlist. Simplesmente liste todos os caracteres que você quer retirar.
//  Com .. você pode especificar um intervalo de caracteres.
$text = "\t\tThese are a few words :) ...  ";
echo "<br />". trim($text);
echo "<br />". trim($text = "\t\tThese are a few words :) ...", $charlist=".");

// ucfirst() — Converte para maiúscula o primeiro caractere de uma string
echo "<br />". ucfirst($str = "string com primeiro caractere em maiusculo.");

//ucwords() — Converte para maiúsculas o primeiro caractere de cada palavra
echo "<br />". ucwords($str = "string com primeiro caractere de cada palavra em maiusculo.");

// vfprintf() — Escreve uma string formatada para um stream
if (!($fp = fopen('date.txt', 'w')))
    return;
echo "<br /> String vprint de ".vfprintf($fp, "%04d-%02d-%02d vprint", array($year=date('Y'), $month=date('m'), $day=date('d')))." chars gravada no arquivo date.txt";
// will write the formatted ISO date to date.txt

//vprintf() — Mostra uma string formatada. Funciona como printf() mas aceita uma matriz de argumentos, ao invés de um número variavel de argumentos.
echo "<br />".vprintf("%d", array("17,999"));

// vsprintf() — Retorna uma string formatada. Funciona como sprintf() mas aceita um array de argumentos, ao invés de um número variável de argumentos.
$string = <<<THESTRING
<br />I like the state of %1\$s <br /> 
I picked: %2\$d as a number, <br /> 
I also picked %2\$d as a number again <br /> 
%3\$s<br /> 
THESTRING;
echo "<br />".vprintf($string, array('Oregon','7','I Love Oregon'));

//wordwrap() — Quebra uma string em um dado número de caracteres
$text = "The quick brown fox jumped over the lazy dog.";
$text2 = "A very long woooooooooooord.";
$newtext = wordwrap($str = $text, $width = 20, $break = "<br />\n", $cut = false);
$newtext2 = wordwrap($str = $text2, $width = 8, $break = "<br />", $cut = true);
echo "<br />".$newtext.'<br />';
echo "<br />".$newtext2;