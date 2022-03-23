<?php

// A função array_pop() remove um elemento do final de uma matriz e retorna esse elemento.
// Se a matriz de entrada estiver vazia, a função array_pop() retornará null
// função modifica a matriz de entrada.
$numbers = [1, 2, 3];

$last_number = array_pop($numbers);

echo $last_number; // 3

print_r($numbers);