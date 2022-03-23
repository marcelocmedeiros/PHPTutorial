<?php

// A função array_push() adiciona um ou mais elementos ao final de uma matriz.
// função retorna o novo número de elementos na matriz.
// modifica a matriz de entrada.

// Se você adicionar apenas um valor a uma matriz, deverá usar a instrução $array[] = $value;para evitar a sobrecarga de chamar a função array_push().

// O exemplo a seguir mostra como usar a array_push()função para adicionar vários elementos ao final de uma matriz:
$numbers = [1, 2, 3];

array_push($numbers, 4, 5);


print_r($numbers);
// empurramos o número 4 e 5 para o final da matriz $numbers .

// Para adicionar um elemento a uma matriz associativa
$roles = [
	'admin' => 1,
	'editor' => 2
];

$roles['approver'] = 3;

print_r($roles);