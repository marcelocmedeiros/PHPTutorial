<?php

// O operador lógico AND aceita dois operandos e retorna truese ambos forem true; caso contrário, ele retorna false.

// PHP não diferenciam maiúsculas de minúsculas, os operadores ANDe são os mesmos:and

// Por convenção, você deve usar o andoperador no formato minúsculo.

// Além de usar a palavra-chave and, o PHP usa && como operador lógico AND

// Os operadores &&e retornam o mesmo resultado. andA única diferença entre os operadores &&e andsão suas precedências.

// O andoperador tem precedência mais alta que o &&operador.
echo"\n====Verdadeiro=====\n";
$price = 100;
$qty = 5;

$discounted = $qty > 3 && $price > 99;

var_dump($discounted);
echo"\n====Falso=====\n";
$price = 100;
$qty = 2;

$discounted = $qty > 3 && $price > 99;

var_dump($discounted);

// Quando o valor do primeiro operando é false, o operador lógico AND sabe que o resultado também deve ser false