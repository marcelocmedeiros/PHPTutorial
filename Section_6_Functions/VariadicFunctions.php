<?php

// função variadica aceita um número variável de parâmetros.

// Para permitir que a sum()função aceite uma variável de argumentos, você precisa usar func_get_args()function. A func_num_args()função retorna uma matriz que contém todos os argumentos da função. 

function sum()
{
    $numbers = func_get_args();
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }

    return $total;
}
echo sum(10, 20) . "\n"; // 30
echo sum(10, 20, 30) . "\n"; // 60
// Dentro da função, o func_get_args()retorna um array que contém todos os argumentos. Para resumir todos os argumentos, usamos um loop for.

// O PHP 5.6 introduziu o ...operador. Quando você coloca o ...operador na frente de um parâmetro de função, a função aceitará um número variável de argumentos e o parâmetro se tornará um array dentro da função. 

function sum2(...$numbers)
{
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }

    return $total;
}
echo sum2(10, 20) . "\n"; // 30
echo sum2(10, 20, 30) . "\n"; // 60

// O PHP 7 permite que você declare tipos para argumentos variádicos.
// function sum(int ...$numbers): int

// Se uma função tiver vários parâmetros, apenas o último parâmetro pode ser variável. Por exemplo:

function my_func($a, $b, ...$params) {
    // ...
}

/*
Resumo
Uma função variadica aceita um número variável de argumentos.
Use o ...operador para definir uma função variádica.
Apenas o último parâmetro pode ser variável.*/