<?php

function concat($str1, $str2, $delimiter)
{
    return $str1 . $delimiter . $str2;
}

$message = concat('Hi', 'there!', ' ');

echo $message;
// No entanto, você descobrirá que costuma usar o espaço ' ' como delimitador. E é repetitivo passar o espaço sempre que você chama a função.

function concat2($str1, $str2, $delimiter = ' ')
{
    return $str1 . $delimiter . $str2;
}

$message = concat2('Hi', 'there!');

echo $message;

function concat3($str1, $str2, $delimiter = ' ')
{
    return $str1 . $delimiter . $str2;
}

$message = concat3('Hi', 'there!', ',');

echo $message;

// Os argumentos padrão devem ser expressões constantes. Eles não podem ser variáveis ​​ou chamadas de função.

// O PHP permite que você use um valor escalar, um array e nullcomo argumentos padrão.

// Quando você usa parâmetros padrão, é uma boa prática colocá-los após os parâmetros que não possuem valores padrão. 

function concat4($delimiter = ' ', $str1, $str2)
{
	return $str1 . $delimiter . $str2;
}

$message = concat4('Hi', 'there!', ',');

echo $message;
// Caso contrário, você terá um comportamento inesperado