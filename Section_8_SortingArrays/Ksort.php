<?php

// A função ksort() classifica os elementos de uma matriz por suas chaves. O ksort()é útil principalmente para classificar arrays associativos .

// Observe que, para classificar os valores de uma matriz em ordem crescente, use a sort()função.

/*
a sintaxe da ksort()função:

ksort(array &$array, int $flags = SORT_REGULAR): bool

A ksort()função tem dois parâmetros:

$arrayé a matriz de entrada
$flagsaltera o comportamento de classificação usando um ou mais valores SORT_REGULAR, SORT_NUMERIC, SORT_STRING, SORT_LOCALE_STRING, SORT_NATURALe SORT_FLAG_CASE.

Para combinar os valores do sinalizador, você usa o | operador. Por exemplo, SORT_STRING | SORT_NATURAL.*/

$employees = [
    'john' => [
        'age' => 24,
        'title' => 'Front-end Developer'
    ],
    'alice' => [
        'age' => 28,
        'title' => 'Web Designer'
    ],
    'bob' => [
        'age' => 25,
        'title' => 'MySQL DBA'
    ]
];
ksort($employees, SORT_STRING);

print_r($employees);

// A krsort()função é como a ksort()função, exceto que ela classifica as chaves de um array em ordem decrescente

krsort($employees, SORT_STRING);
print_r($employees);