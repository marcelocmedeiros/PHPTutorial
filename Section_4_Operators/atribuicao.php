<?php

// O PHP usa o = para representar o operador de atribuição.
$x = 10;
$y = 20;
$total = $x + $y;
echo $total. "\n";
$x = $y = 20;
$total = $x + $y;
echo $total. "\n";
/*
todos os operadores de atribuição aritmética:
Operador	Exemplo	        Equivalente	    Operação
    +=	    $x += $y	    $x = $x + $y	Adição
    -=	    $x -= $y	    $x = $x – $y	Subtração
    *=	    $x *= $y	    $x = $x * $y	Multiplicação
    /=	    $x /= $y	    $x = $x / $y	Divisão
    %=	    $x %= $y	    $x = $x% $y	    Módulo
    **=	    $ z ** = $ y	$x = $x ** $y	Exponenciação
*/

// O PHP usa o operador de concatenação (.) para concatenar duas strings.
$greeting = 'Hello ';
$name = 'John';

$greeting = $greeting . $name;

echo $greeting;
echo"\n===============\n";
$greeting = 'Hello ';
$name = 'John';

$greeting .= $name;

echo $greeting;