<?php

// Suponha que você tenha um array retornado por uma função parse_url()
$urls = parse_url('https://www.phptutorial.net/');
var_dump($urls);

// Para atribuir os elementos da matriz a várias variáveis, você pode usar a list()construção assim:
list('scheme' => $scheme,
    'host' => $host,
    'path'=>$path
) = parse_url('https://www.phptutorial.net/');

var_dump($scheme, $host, $path);

// O PHP 7.1 introduziu uma nova maneira de descompactar os elementos do array em variáveis. É chamado de desestruturação de array:
[
    'scheme' => $scheme,
    'host' => $host,
    'path'=>$path
] = parse_url('https://www.phptutorial.net/');

var_dump($scheme, $host, $path);

// Assim como o list(), a desestruturação de arrays funciona com arrays indexados e associativos .
$person = ['John','Doe'];
[$first_name, $last_name] = $person;

var_dump($first_name, $last_name);

// A sintaxe de desestruturação de array também permite pular quaisquer elementos. Por exemplo, o seguinte pula o segundo elemento da matriz

$person = ['John','Doe', 24];
[$first_name, , $age] = $person;

var_dump($first_name, $age);

// Exemplos de desestruturação de array PHP
//  Troca de variáveis
$x = 10;
$y = 20;

// swap variables
$tmp = $x;
$x = $y;
$y = $tmp;

var_dump($x, $y);

// usar a sintaxe de desestruturação de array para tornar o código mais curto
$x = 10;
$y = 20;

// swap variables
[$x, $y] = [$y, $x];

var_dump($x, $y);

//  A desestruturação de array permite analisar um array retornado de uma função.
[
    'dirname' => $dirname,
    'basename' => $basename
] = pathinfo('c:\temp\readme.txt');


var_dump($dirname, $basename);