<?php

// A instrução foreach que permite iterar sobre os elementos de um array , seja um array indexado ou um array associativo .

// A instrução  foreachitera sobre todos os elementos em uma matriz, um de cada vez. Começa com o primeiro elemento e termina com o último.

// Para iterar sobre todos os elementos de uma matriz indexada, você usa a seguinte sintaxe

foreach ($array_name as $element) {
    // process element here
}

$colors = ['red', 'green', 'blue'];

foreach ($colors as $color) {
    echo $color . "\n";
}

//  foreach com uma matriz associativa
// Para iterar sobre os elementos de um array associativo , você usa a seguinte sintaxe

foreach ($array_name as $key => $value) {
    //process element here;
}

$capitals = [
    'Japan' => 'Tokyo',
    'France' => 'Paris',
    'Germany' => 'Berlin',
    'United Kingdom' => 'London',
    'United States' => 'Washington D.C.'
];

foreach ($capitals as $country => $capital) {
    echo "The capital city of {$country} is $capital" . "\n";
}
