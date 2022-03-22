<?php

// Criando arrays associativos
// Para criar um array associativo, você usa a array()construção
$html = array();

// ou a sintaxe de notação JSON
$html = [];

// Adicionando elementos
// Para adicionar um elemento a uma matriz associativa, você precisa especificar uma chave. 
$html['title'] = 'PHP Associative Arrays';
$html['description'] = 'Learn how to use associative arrays in PHP';

print_r($html);

// Acessando elementos
// Para acessar um elemento em uma matriz associativa, você usa a chave.
$html['title'] = 'PHP Associative Arrays';
$html['description'] = 'Learn how to use associative arrays in PHP';

echo $html['title'];