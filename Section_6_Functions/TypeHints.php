<?php

// PHP é uma linguagem de tipagem dinâmica. Ao definir uma função , você não precisa declarar tipos para parâmetros .

function add($x, $y)
{
    return $x + $y;
}

$result = add(1.0,2.5);
echo $result; // 3.5

// Para impor os tipos de parâmetros de função e valor de retorno, você pode usar type hints.

// No PHP 5, você pode usar array, callablee class para type hints. No PHP 7+, você também pode usar tipos escalares como bool, float, inte string.
function add2(int $x, int $y)
{
    return $x + $y;
}

$result = add2(1,2.5);
echo $result; // 3

// Para especificar o tipo de um valor de retorno para uma função, você adiciona o tipo após o cabeçalho da função

function add3(int $x, int $y): int
{
    return $x + $y;
}

echo add3(10, 20);

// A partir do PHP 7.0, se uma função não retornar um valor, você usa o voidtipo. 

function dd($data):void
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
}

// A partir do PHP 8.0, se uma função retornar um valor de vários tipos, você pode declará-la como um tipo de união.

// function add4($x, $y): int | float
// {
//     return $x * $y;
// }

// echo add4(10, 20); // 200 (int) 
// echo add4(1.5, 2.5); // 3.75 (float)

// mixed type
// Se uma função retornar um valor de vários tipos, você poderá usar o tipo misto. O tipo misto significa um dos vários tipos. O tipo misto. É equivalente ao seguinte tipo de união:

    // object|resource|array|string|int|float|bool|null

// Por exemplo, a função interna filter_var() usa o tipo de união (array|int) e o tipo misto como dicas de tipo:
// filter_var(mixed $value, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed

// nullable type

function upper(?string $str): string
{
    return strtoupper($str);
}

$str = null;
echo upper($str);

// O PHP permite que você marque as declarações de tipo e retorne valores como anuláveis ​​prefixando o nome do tipo com um ponto de interrogação ( ?).

// No exemplo acima, adicionamos o ?ao tipo string do $strparâmetro. O ?stringpermite que você passe um argumento de string ou nulo.

// Observe que o tipo misto já inclui o tipo nulo. Portanto, você não precisa incluir uma mistura anulável assim:

// ? mixed

/*
Resumo
Use dicas de tipo PHP para parâmetros de função e tipos de retorno.
Use voidtype se a função não retornar nenhum valor.
Use mixedtipo ou tipo de união se o parâmetro da função ou o valor de retorno da função esperam de vários tipos.
Para tornar um tipo anulável, prefixe o tipo com um ponto de interrogação ( ?type).
*/