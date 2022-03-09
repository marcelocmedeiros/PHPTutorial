<?php

// O var_dump()é uma função interna que permite despejar as informações sobre uma variável . A função var_dump() aceita uma variável e exibe seu tipo e valor.

$balance = 100;
var_dump($balance); #int(100)
// A saída mostra o valor da variável (100) e seu tipo ( int ) que significa inteiro.
$message = 'Insufficient balance';
var_dump($message); #string(20) "Insufficient balance"

// Despejar e morrer usando as funções var_dump() e die()
// A die()função exibe uma mensagem e finaliza a execução do script:
die($status);
//  deseja despejar as informações de uma variável e encerrar o script imediatamente. Nesse caso, você pode combinar a var_dump()função com a die()função

/*
Resumo:
    Use a var_dump()função para despejar as informações sobre uma variável.
    Envolva a saída da var_dump()função em uma pretag para tornar a saída mais legível.
    A função die() encerra o script imediatamente.
    Combine var_dump()e die()funções para despejar e morrer.
*/