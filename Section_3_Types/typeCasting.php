<?php

// A conversão de tipo permite converter um valor de um tipo para outro

/*
Cast Operators	                Conversion
(array)         	            Array
(bool) or (boolean)	            Boolean
(int) or (integer)	            Integer
(object)	                    Object
(real), (double), or (float)	Float
(string)	                    String
*/

// Para converter um valor em um inteiro, você usa o (int)operador de conversão de tipo.
echo (int)12.5 . "\n"; // 12
echo (int)12.1 . "\n"; // 12
echo (int)12.9 . "\n"; // 12
echo (int)-12.9 . "\n"; // -12

// Suponha que você tenha uma string e queira convertê-la como um inteiro
// Se uma string for numérica ou numérica principal, então o (int)converterá para o valor inteiro correspondente. Caso contrário, o (int)cast da string para zero
$amount =  (int)'100 USD';
echo $amount; // 100

// Observe que o (int)operador converte nulo para zero (0)
$qty = null;
echo (int)$qty; // 0

// Para converter um valor em um float , você usa o (float)
$amount = (float)100;
echo $amount; // 100

// Para converter um valor em uma string, você usa o (string)
$amount = 100;
echo (string)$amount . " USD"; // 100 USD

// O (string)operador converte nullpara uma string vazia.

// O (string)cast uma matriz para a "Array"string. 
$numbers = [1,2,3];
$str = (string) $numbers;

echo $str; // Array