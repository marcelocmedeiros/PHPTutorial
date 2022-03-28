<?php

// função array_reverse() PHP para inverter a ordem dos elementos em um array.
// função aceita uma matriz e retorna uma nova matriz com a ordem dos elementos na matriz de entrada invertida.
// Não altera a matriz de entrada. Em vez disso, ele retorna uma nova matriz.
$numbers = [10, 20, 30];
$reversed = array_reverse($numbers);

print_r($reversed);
print_r($numbers);

// função para reverter elementos de uma matriz. No entanto, preserva as chaves dos elementos
$book = [
	'PHP Awesome',
	999,
	['Programming', 'Web development'],
];

$preserved = array_reverse($book, true);

print_r($preserved);
