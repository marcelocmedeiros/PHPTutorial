<?php

// Normalmente, você tem uma matriz com uma dimensão.
$scores = [1, 2, 3, 4, 5];

// Um array multidimensional é um array que tem mais de uma dimensão. Por exemplo, uma matriz bidimensional é uma matriz de matrizes. É como uma tabela de linhas e colunas.
$tasks = [
    ['Learn PHP programming', 2],
    ['Practice PHP', 2],
    ['Work', 8],
    ['Do exercise', 1],
];

print_r($todo_list);

// Adicionando elementos
$tasks = [
    ['Learn PHP programming', 2],
    ['Practice PHP', 2],
    ['Work', 8],
    ['Do exercise', 1],
];

$tasks[] = ['Build something matter in PHP', 2];

print_r($tasks);

// Removendo elementos
// Para remover um elemento de uma matriz multidimensional, você pode usar a unset()função.

$tasks = [
    ['Learn PHP programming', 2],
    ['Practice PHP', 2],
    ['Work', 8],
    ['Do exercise', 1],
];

unset($tasks[2]);

print_r($tasks);

// Observe que a unset()função não altera as chaves do array. Para reindexar a chave, você pode usar a array_splice()função.

$tasks = [
    ['Learn PHP programming', 2],
    ['Practice PHP', 2],
    ['Work', 8],
    ['Do exercise', 1],
];

array_splice($tasks[2], 2, 1);

print_r($tasks);

// Iterando sobre elementos de um array multidimensional usando foreach
// Para iterar um array multidimensional, você usa um foreachloop aninhado como este:

$tasks = [
    ['Learn PHP programming', 2],
    ['Practice PHP', 2],
    ['Work', 8],
    ['Do exercise', 1],
];

foreach ($tasks as $task) {
    foreach ($task as $task_detail) {
        echo $task_detail . "\n";
    }
}

// Acessando elementos de um array multidimensional
$tasks = [
	['Learn PHP programming', 2],
	['Practice PHP', 2],
	['Work', 8],
	['Do excercise', 1],
];

echo $tasks[0][1];

// Para ordenar um array multidimensional, você usa a função usort()
$tasks = [
	['Learn PHP programming', 2],
	['Practice PHP', 2],
	['Work', 8],
	['Do excercise', 1],
];

usort($tasks, function ($a, $b) {
	return $a[1] <=> $b[1];
});

print_r($tasks);
// Neste exemplo, usamos o operador nave espacial ( <=>), que está disponível desde o PHP 7, para comparar o tempo gasto em cada tarefa e ordenar as tarefas por horas.