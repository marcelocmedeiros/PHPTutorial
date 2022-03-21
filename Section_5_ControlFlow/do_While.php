<?php

// Ao contrário da instrução while, o PHP avalia o expressionno final de cada iteração. expression Isso significa que o loop sempre é executado pelo menos uma vez, mesmo false antes do loop entrar.

/*
do...while vs. while

As diferenças entre as declarações do...while e while são:

O PHP executa a instrução do...while pelo menos uma vez, enquanto não executará statementa instrução while se expression for false.

O PHP avalia o expressionna do...while declaração no final de cada iteração. Por outro lado, o PHP avalia o expressionna instrução while no início de cada iteração.
*/
$i = 0;
do {
 echo $i;
} while ($i > 0);

$i = 10;

do {
    echo $i  . "\n";
    $i--;
} while ($i > 0);