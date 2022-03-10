<?php

// Inteiros são números inteiros como -3, -2, -1, 0, 1, 2, 3… PHP usa o inttipo para representar os inteiros.

//  Normalmente, os números inteiros têm um intervalo de -2.147.438.648 a 2.147.483.647. É equivalente a 32 bits assinados.

// Para obter o tamanho do inteiro, você usa a PHP_INT_SIZEconstante. Além disso, você usa as constantes PHP_INT_MINe PHP_INT_MAXpara obter os valores inteiros mínimo e máximo.

// O PHP representa literais inteiros nos formatos decimal, octal, binário e hexadecimal.

// A partir do PHP 7.4, você pode usar sublinhados (_) para agrupar dígitos em um inteiro para facilitar a leitura. Ex: 1_000_000

// Os números octais consistem em um zero à esquerda e uma sequência de dígitos de 0 a 7. Ex: +010 // decimal 8

// Os números hexadecimais consistem em uma entrelinha 0xe uma sequência de dígitos (0-9) ou letras (AF). As letras podem ser minúsculas ou maiúsculas. Por convenção, as letras são escritas em maiúsculas. Ex: 0x10 // decimal 16

// Os números binários que começam com 0bsão seguidos por uma sequência de dígitos 0 e 1. Ex: 0b10 // decimal 2

// A função is_int()
// A is_int()função interna retorna true se um valor (ou uma variável ) for um número inteiro. Caso contrário, ele retorna false.
$amount = 100;
echo is_int($amount);