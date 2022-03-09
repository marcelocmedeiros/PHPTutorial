<?php

// Os comentários fornecem informações úteis que ajudarão você e outros desenvolvedores a entender o significado do código mais rapidamente posteriormente.

// O PHP suporta dois tipos de comentários:

// Comentários de uma linha

/**
 * Comentários de várias linhas
 * 
 */

# O comentário de uma linha é colocado no final da linha ou no bloco atual.

// Um comentário de uma linha começa com a libra ( #) ou a barra dupla ( //). O resto do texto após o (//) é ignorado pelo interpretador PHP.

$rate = 100;
$hours = 173;
$payout = $hours * $rate; // payout calculation

// Um comentário de várias linhas começa com /* e termina com */. 

/*
Escrevendo comentários significativos

1) Fazer o código falar por si mesmo sem usar comentários nomeando identificadores significativos.
2) Não escreva um comentário para explicar o que o código faz, em vez disso, explique por que ele faz isso. 
3) Ao escrever um comentário, faça-o o mais conciso possível.
*/