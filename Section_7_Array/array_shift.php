<?php

// A função array_shift() remove o primeiro elemento de um array e o retorna.
// Se $array estiver vazio ou não for uma matriz, a função array_shift() retornará null.
// função altera a matriz de entrada encurtando-a em um elemento.
// Ele também modifica as chaves numéricas da matriz para que o primeiro elemento na matriz modificada tenha a chave começando em zero.

// Para remover um elemento do final de um array e devolvê-lo, você usa a função array_pop().

// O exemplo a seguir usa a array_shift()função para remover o primeiro elemento de uma matriz:
$numbers = [1, 2, 3];

$first_number = array_shift($numbers);

print_r($numbers);
