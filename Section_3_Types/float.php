<?php

// Os números de ponto flutuante representam valores numéricos com dígitos decimais.

// Os números de ponto flutuante são frequentemente chamados de números flutuantes, duplos ou números reais.

// O PHP também suporta os números de ponto flutuante em notação científica:  0.125E1 // 0.125 * 10^1 or 1.25

// Desde o PHP 7.4, você pode usar sublinhados em floats para tornar os números longos mais legíveis. Ex: 1_234_457.89

/*
Precisão do número de ponto flutuante
Como o computador não pode representar números de ponto flutuante exatos, ele só pode usar representações aproximadas.
Isso significa que você deve ter cuidado ao comparar dois números de ponto flutuante usando o operador ==.
*/

$total = 0.1 + 0.1 + 0.1;
echo $total == 0.3; // return false

// Para verificar se um valor é um número de ponto flutuante, você usa a função is_float()ou is_real(). O is_float()retorna truese seu argumento for um número de ponto flutuante; caso contrário, ele retorna false.
echo is_float(0.5);