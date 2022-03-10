<?php

// Um tipo especifica a quantidade de memória alocada para um valor associado a ele. Um tipo também determina as operações que você pode realizar nele.

// O PHP tem dez tipos primitivos, incluindo quatro tipos scala, quatro tipos compostos e dois tipos especiais:

// Tipos escalares:
// bool 
// int
// float
// string
// Tipos compostos
// array
// object
// callable
// iterable
// Tipos especiais
// resource
// null

/*
Tipos escalares
Uma variável é escalar quando contém um único valor do tipo integer, float, string ou boolean.

inteiro
Os inteiros são números inteiros definidos no conjunto {…-3,-2-,-1,0,1,2,3…}. O tamanho do inteiro depende da plataforma onde o PHP é executado.

A constante PHP_INT_SIZE especifica o tamanho do inteiro em uma plataforma específica. O PHP usa a palavra-chave int para denotar o tipo inteiro.
*/

/*
Floats
Floats são números de ponto flutuante, também conhecidos como floats, doubles ou números reais.

O PHP usa o formato duplo IEEE 754 para representar floats. Como outras linguagens de programação, os floats têm precisão limitada.
*/

/*
boleano
Boolean representa um valor de verdade que pode ser trueou false. O PHP usa a boolpalavra-chave para representar o tipo booleano.

O tipo bool tem dois valores truee false. Como as palavras-chave não diferenciam maiúsculas de minúsculas, você pode usar true, True, TRUE, false, Falsee Falsepara indicar valores booleanos.
*/

/* obs:
Quando você usa os valores de outros tipos no contexto booleano, como instruções if-else e switch-case , o PHP os converte para os valores booleanos.

O PHP trata os seguintes valores como false:

A palavra-chave false.
O inteiro 0 e -0 (zero).
Os flutuadores 0,0 e -0,0 (zero).
A string vazia ( "", '') e a string “0”.
A matriz vazia ( array()ou []).
O null.
Os SimpleXML objetos criados a partir de elementos vazios sem atributos.
Os valores que não são um desses valores falsos acima são true.
*/

/*
Uma string é uma sequência de caracteres entre aspas simples (') ou aspas duplas (“).
*/

// Tipos compostos
// Os dados compostos incluem os valores que contêm mais de um valor. O PHP tem dois tipos compostos, incluindo array e objeto.

// Um array é um mapa ordenado que associa chaves a valores. Por exemplo, você pode definir uma lista de itens em um carrinho de compras assim: 

$carts = ['laptop', 'mouse', 'keyboard'];
echo $carts[0]; // 'laptop'
echo $carts[1]; // 'mouse'
echo $carts[2]; // 'keyboard'
// A $cartsmatriz contém três valores de string. Ele mapeia o índice 0, 1 e 2 para os valores 'laptop', 'mouse'e 'keyboard'. O $cartsé chamado de array indexado porque usa índices numéricos como chaves.

// arrays são conhecidos como arrays associativos 
$prices = [
    'laptop' => 1000,
    'mouse' => 50,
    'keyboard' => 120
];

echo $prices['laptop']; // 1000
echo $prices['mouse']; // 50
echo $prices['keyboard']; // 120

/*
Objeto
Um objeto é uma instância de uma classe. É um conceito central na programação orientada a objetos .

Um objeto tem propriedades. Por exemplo, um objeto de pessoa pode ter as propriedades nome, sobrenome e idade.

Um objeto também possui comportamentos, que são conhecidos como métodos. Por exemplo, um objeto pessoa pode ter um método chamado getFullName()que retorna o nome completo.
*/

/*
Tipos especiais
PHP tem dois tipos especiais: null e resource

null
O null tipo tem um valor chamado null que representa uma variável sem valor.

Resource
O tipo de Resource contém uma referência a um recurso externo, por exemplo, um filehandle ou uma conexão de banco de dados 
*/

/*
Resumo
O PHP tem quatro tipos escalares, quatro tipos compostos e dois tipos especiais.
Tipos de escala: inteiro, flutuante, string e booleano.
Tipos compostos: array e objeto.
Tipos especiais: null e resource.
*/