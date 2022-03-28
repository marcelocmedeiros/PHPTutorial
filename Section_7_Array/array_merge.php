<?php

// a função array_merge() para mesclar um ou mais arrays em um.

// função aceita um ou mais arrays e retorna um novo array que contém os elementos dos arrays de entrada.

// função anexa os elementos do próximo array ao último elemento do anterior.

$server_side = ['PHP'];

$client_side = ['JavaScript', 'CSS', 'HTML'];

$full_stack = array_merge($server_side, $client_side);

print_r($full_stack);

// array_merge() com chaves de string
$before = [
	'PHP' => 2,
	'JavaScript' => 4,
	'HTML' => 4,
	'CSS' => 3
];

$after = [
	'PHP' => 5,
	'JavaScript' => 5,
	'MySQL' => 4,
];

$skills = array_merge($before, $after);

print_r($skills);
// Como as matrizes $beforee $after têm os mesmos elementos com as mesmas chaves de string PHP e JavaScript, os elementos da matriz $beforesobrescrevem os da matriz $after .