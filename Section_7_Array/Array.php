<?php

// array é uma lista de elementos

// O PHP fornece dois tipos de arrays: indexados e associativos.

// As chaves do array indexado são inteiros que começam em 0. Normalmente, você usa arrays indexados quando deseja acessar os elementos por suas posições.

// As chaves de um array associativo são strings. E você usa arrays associativos quando deseja acessar elementos por chaves de string.

// Em PHP, você pode usar a array()sintaxe construct ou [] para definir um array. A []sintaxe é mais curta e mais conveniente.

// Criando um array usando a construção array()
$scores = array(1, 2, 3);

// Criando um array usando a sintaxe []
$scores = [1, 2, 3];

// Exibindo matrizes
// Para mostrar o conteúdo de um array, você usa a função var_dump()
var_dump($scores);

// pode usar a função print_r():
print_r($scores);

// Acessando elementos do arrayPara acessar um elemento em uma matriz, você especifica o índice do elemento entre colchetes:

// $array_name[index]
$scores = [1, 2, 3];
echo $scores[0]; // 1

// Adicionando um elemento ao array
// Para adicionar um elemento a uma matriz, você usa a seguinte sintaxe:

// $array_name[] = new_element;
$scores = [1, 2, 3];
$scores[] = 4;
// É possível usar um índice quando você adiciona um novo elemento ao array. Por exemplo:

$scores = [1, 2, 3];
$scores[4] = 5;

// Alterando os elementos da matriz
// A instrução a seguir altera o elemento localizado no indexpara o $new_element:

// $array_name[index] = $new_element;

$scores = [1, 2, 3];
$scores[0] = 0;

// Removendo elementos da matriz
// Para remover um elemento de uma matriz, você usa a unset()função.
$scores = [1, 2, 3];
unset($scores[1]);

// Obtendo o tamanho de um array
// Para obter o número de elementos em uma matriz, você usa a count()função. 
$scores = [1, 2, 3, 4, 5];

echo count($scores);