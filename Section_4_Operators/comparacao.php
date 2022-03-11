<?php

// Um operador de comparação permite comparar dois valores e retorna true se a comparação for verdadeira ou false  se não.

/*
Operador	Nome	    Descrição
==	        Igual 	    Retorna  true se ambos os operandos forem iguais;                 caso contrário, ele retorna  false.
!=, <>	    Diferente	Retorna truese ambos os operandos forem iguais; caso                    contrário, ele retorna false.
===	        Idêntico 	Retorna  truese ambos os operandos tiverem o mesmo                 tipo de dado e igual; caso contrário, ele retorna  false.
!==	        Não idêntico Retorna  truese ambos os operandos não são iguais ou não                       possuem o mesmo tipo de dado; caso contrário, ele retorna false.
>	        Maior que	Retorna  truese o operando da esquerda for maior que o                      operando da direita; caso contrário, ele retorna  false.
>=	        Maior igual Retorna  truese o operando da esquerda for maior ou                        igual ao operando da direita; caso contrário, ele retorna  false.
<	        Menor que	Retorna  truese o operando da esquerda for menor que o                       operando da direita; caso contrário, ele retorna  false.
<=	        Menor igual Retorna  truese o operando da esquerda for menor ou                       igual ao operando da direita; caso contrário, ele retorna  false.
*/

// Operador de igualdade (==)
// A igualdade retorna truese ambos os valores forem iguais; 
$x = 10;
$y = 10;
var_dump($x == $y); // bool(true)
echo"\n====Igualdade====\n";
$x = '20';
$y = 20;
var_dump($x == $y); // bool(true)

// Diferente do operador (!=, <>)
// O operador diferente de (!=, <>) retorna truese o valor do lado esquerdo não for igual ao valor do lado direito;
echo"\n====Diferente=====\n";
$x = 20;
$y = 10;

var_dump($x != $y); // bool(true)

// Operador idêntico (===)
// O operador idêntico retorna truese ambos os valores forem iguais e tiverem o mesmo tipo
echo"\n====Idêntico=====\n";
$x = '20';
$y = 20;
var_dump($x === $y); // bool(false)

// Operador não idêntico (!==)
// O operador não idêntico (!==) retorna truese os valores não forem iguais ou não forem do mesmo tipo; caso contrário, ele retorna false. 
echo"\n====Não Idêntico=====\n";
$x = 20;
$y = '20';
var_dump($x !== $y); // bool(false)

// Maior que (>)
// O retorno maior que truese o valor à esquerda for maior que o valor à direita;
echo"\n====Maior que=====\n";
$x = 10;
$y = 20;

var_dump($x > $y); // bool(false)
var_dump($y > $x); // bool(true)

// Maior ou igual a (>=)
// O operador maior ou igual a retornará true se o valor à esquerda for maior ou igual ao valor à direita;
echo"\n====Maior ou igual=====\n";
$x = 20;
$y = 20;

var_dump($x >= $y); // bool(true)

// Menor que (<)
// O operador menor que retornará true se o valor à esquerda for menor que o valor à direita; 
echo"\n====Menor que=====\n";
$x = 20;
$y = 10;

var_dump($x < $y); // bool(false)
var_dump($y < $x); // bool(true)

// Menor ou igual a (<=)
// Se o valor à esquerda for menor ou igual ao valor à direita, o operador menor ou igual a retornará true;
echo"\n====Menor ou igual=====\n";
$x = 20;
$y = 20;

var_dump($x >= $y); // bool(true)