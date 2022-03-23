<?php

// Para anexar um ou mais elementos a uma matriz, você usa a array_unshift()função:

// array_unshift ( array &$array , mixed ...$values ) : int

// Nesta sintaxe:

// $array é a matriz de entrada
// $values são os valores a serem precedidos
// O array_unshift()retorna o novo número de elementos na matriz.

// Observe que a função array_unshift() 1- modifica a matriz original. 2- a função precede os elementos à matriz de entrada como um todo. 3- Ele preserva os elementos prefixados. 4- adiciona os novos elementos ao início da matriz de entrada, ela altera os índices para começar do zero.

// O exemplo a seguir usa a array_unshift()função para preceder um elemento ao início de uma matriz:

$permissions = [
    'edit',
    'delete',
    'view'
];

array_unshift($permissions, 'new');

print_r($permissions);

// O exemplo a seguir usa o array_unshift()prefixo para três elementos no início de uma matriz:

$permissions = [
	'edit',
	'delete',
	'view'
];

array_unshift($permissions, 'new', 'approve', 'reject');

print_r($permissions);

// Para anexar um elemento a uma matriz associativa, você usa o operador +. Por exemplo:

$colors = [
	'red' => '#ff000',
	'green' => '#00ff00',
	'blue' => '#0000ff',
];

$colors = ['black' => '#000000'] + $colors;

print_r($colors);