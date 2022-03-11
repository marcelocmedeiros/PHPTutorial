<?php

/*
PHP suporta muitos tipos de operadores:

Operadores aritméticos
Operadores de Atribuição
Operadores bit a bit
Operadores de comparação
Operadores de Incremento/Decremento
Operadores lógicos
Concatenando Operadores
*/

//Operadores aritméticos

// Os operadores aritméticos requerem valores numéricos. Se você aplicá-los a valores não numéricos, eles os converterão em valores numéricos antes de realizar a operação aritmética.

/*
Operador	Nome	         Descrição
    +	    Adição	        Retorna a soma de dois operandos
    –	    Subtração	    Retorna a diferença entre dois operandos
    *	    Multiplicação	Retorna o produto de dois operandos
    /	    Divisão	        Retorna o quociente de dois operandos
    %	    Módulo	        Retorna o resto da divisão do primeiro operando pelo segundo
*/
$x = 20;
$y = 10;

// add, subtract, and multiplication operators demo
echo $x + $y . "\n";  // 30
echo $x - $y . "\n";  // 10
echo $x * $y . "\n";  // 200

// division operator demo
$z = $x / $y;
echo gettype($z)  . "\n"; //  integer

$z = $y / $x;
echo gettype($z)  . "\n"; // double

// modulus demo

$y = 15;
echo $x % $y . "\n"; // 5

// Operadores lógicos

// XOR lógico	Retorne true se os operandos não forem iguais, for true, caso contrário, retorne false.
/*
falso | verdadeiro = true
verdadeiro | falso = true
falso | falso = false
verdadeiro | verdadeiro = false
*/

/*
Operadores de Atribuição
mais igual  +=
menos igual  -=
divide-equal  /=
multiplicação igual  *=
módulo igual  %=
XOR igual  ^=
E igual  &=
OU igual  |=
concatenar igual  .=
*/

/*
Os operadores de incremento (++) e decremento (–) fornecem uma maneira rápida de aumentar e diminuir o valor de uma variável em 1.

Exemplo	Nome	        Valor devolvido	    Efeito em $a
++$a	Pré-incremento	$a + 1	            Incrementa $a em 1 e, em seguida, retorna $a.
$a++	Pós-incremento	$a	                Retorna $a e incrementa $a em 1.
--$a	Pré-decremento	$a - 1	            Decrementa $a em 1 e retorna $a.
$a--	Pós-decremento	$a	                Retorna $a e diminui $a em 1.
*/
