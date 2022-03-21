<?php

// Para habilitar a tipagem estrita, você pode usar a declare(strict_types=1);diretiva no início do arquivo assim:

declare(strict_types=1);//Observe que você precisa colocar a declare(strict_types=1);diretiva no início do arquivo de script antes de qualquer outra instrução.

function add(int $x, int $y)
{
    return $x + $y;
}

echo add(1.5, 2.5); //Fatal error: Uncaught TypeError: Argument 1 passed to add() must be of the type int, float given, called in ...

// Ao adicionar a diretiva de tipagem estrita ao arquivo, o código será executado no modo estrito. O PHP habilita o modo estrito por arquivo.

// No modo estrito, o PHP espera que os valores com o tipo correspondam aos tipos de destino. Se houver uma incompatibilidade, o PHP emitirá um erro.

// declare(strict_types=1);

function add2(float $x, float $y)
{
    return $x + $y;
}

echo add2(1, 2); // 3

// A diretiva de tipagem estrita tem um caso especial quando o tipo de destino é float. Se o tipo de destino for float, você pode passar um valor do tipo integer.


// PHP strict_types e incluir
// Suponha que você defina a add()função no functions.phparquivo:

// declare(strict_types=1);

function add3(int $x, int $y)
{
    return $x + $y;
}

// E você inclui o functions.php no index.php arquivo:

include 'functions.php';

echo add(1.5, 2.5);

// Mesmo que functions.phpdeclare a diretiva de tipagem estrita, ela não afeta o index.php.

// Observe que a includeconstrução carrega o código de outro arquivo em um arquivo. E você aprenderá mais sobre isso no tutorial posterior.

// Quando você chama uma função definida em um arquivo com digitação estrita (functions.php) de um arquivo sem digitação estrita ( index.php), o PHP respeitará a preferência do chamador ( index.php). Isso significa que cabe ao chamador decidir se deve usar o modo estrito ou não. Nesse caso, o index.phpnão será executado no modo estrito.

/*
Resumo
Use a diretiva strict_types do PHP para habilitar a digitação estrita ou o modo estrito.
No modo estrito, o PHP aceita apenas valores correspondentes às declarações de tipo e emite uma TypeErrorexceção se houver uma incompatibilidade.
Quando você inclui código de outro arquivo, o PHP usa o modo do chamador.
*/