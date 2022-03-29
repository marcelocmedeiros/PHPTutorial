<?php

// A função asort()classifica os elementos de uma matriz associativa em ordem crescente. Ao contrário de outras funções de classificação , a função asort()mantém a associação de índice.

$mountains = [
    'K2' => 8611,
    'Lhotse' => 8516,
    'Mount Everest' => 8848,
    'Kangchenjunga' => 8586,
];
asort($mountains);

print_r($mountains);

// Para classificar um array associativo em ordem decrescente e manter a associação do índice, você usa a função arsort():

arsort($mountains);

print_r($mountains);