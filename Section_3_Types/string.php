<?php

// No PHP, uma string é uma sequência de caracteres. O PHP fornece quatro maneiras de definir uma string literal, incluindo aspas simples, aspas duplas, sintaxe heredoc e sintaxe nowdoc . 

$title = 'PHP string is awesome';
$title = "PHP string is awesome";
// No entanto, você não pode iniciar uma string com aspas simples e terminá-la com aspas duplas e vice-versa. As citações devem ser consistentes.

/*
Strings com aspas simples vs. strings com aspas duplas

Suponha que você tenha uma variável $name.
$name = 'John';
E você deseja mostrar uma mensagem que exibe o seguinte:
Hello John
Para fazer isso, você pode usar o operador concatenar ( .) para concatenar duas strings:*/
$name = 'John';
echo 'Hello ' . $name;
echo"\n";

// No entanto, se você usar uma string com aspas duplas, poderá colocar a $namevariável dentro da string da seguinte maneira:
$name1 = 'John';
echo "Hello $name1";

// Ao avaliar uma string com aspas duplas, o PHP substitui o valor de qualquer variável que você colocar dentro da string. Esse recurso é chamado de interpolação de variáveis ​​em PHP.

// Além de substituir as variáveis, as strings com aspas duplas também aceitam caracteres especiais, por exemplo, \n, \r, \t escapando-os.

// É uma boa prática usar strings com aspas simples quando você não usa interpolação de variáveis ​​porque o PHP não precisa analisá-las e avaliá-las para strings com aspas duplas.

/*
Acessando caracteres em uma string
Uma string tem um índice baseado em zero. Isso significa que o primeiro caractere tem um índice de 0. O segundo caractere tem um índice de 1 e assim por diante.
acessar um caractere em uma posição específica em uma string usando os colchetes [].
*/
echo "\n";
$title = 'PHP string is awesome';

echo $title[0];

// Para obter o comprimento de uma string, você usa uma função interna strlen()
echo "\n";
echo strlen($title);