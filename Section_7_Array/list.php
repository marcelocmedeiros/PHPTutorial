<?php

//  aprenderá como usar a sintaxe de lista do PHP para atribuir várias variáveis ​​em uma operação.

// O PHP fornece a list()construção que atribui os elementos de um array a uma lista de variáveis ​​em uma operação
$prices  = [100, 0.1];
list($buy_price, $tax) = $prices;

var_dump( $buy_price, $tax );
// Observe que like array(), list()não é uma função, mas uma construção de linguagem.

// O exemplo a seguir usa a lista para atribuir o primeiro e o terceiro elemento às variáveis. Ele pula o segundo elemento
$prices = [100, 0.1, 0.05];

list($buy_price, , $discount) = $prices;
echo "The price is $buy_price with the discount of $discount";

// O exemplo a seguir usa a lista aninhada para atribuir os elementos do array às variáveis:
$elements = ['body', ['white','blue']];
list($element, list($bgcolor, $color)) = $elements;

var_dump($element, $bgcolor, $color);

// A partir do PHP 7.1.0, você pode usar a construção de lista para atribuir elementos de um array associativo a variáveis.

$person = [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'age' => 25
];

list(
    'first_name' => $first_name,
    'last_name' => $last_name,
    'age' => $age) = $person;

var_dump($first_name, $last_name, $age);