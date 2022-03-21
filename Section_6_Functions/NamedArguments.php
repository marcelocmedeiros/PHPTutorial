<?php

// Desde o PHP 8.0, você pode usar argumentos nomeados para funções. Os argumentos nomeados permitem que você passe argumentos para uma função com base nos nomes dos parâmetros em vez das posições dos parâmetros.

function find($needle, $haystack)
{
    return strpos($haystack, $needle);
} 

find('awesome', 'PHP is awesome!');

$link = create_anchor(
    'PHP Tutorial', 
    'https://www.phptutorial.net/',
    '',
    '_blank'
);

echo $link;