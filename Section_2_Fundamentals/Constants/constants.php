<?php

// Uma constante é simplesmente um nome que contém um único valor e que Uma constante é simplesmente um nome que contém um único valor

// Para definir uma constante usa a  função define() que recebe o nome da constante como primeiro argumento e o valor da constante como segundo argumento. 
define('WIDTH','1140px');
echo WIDTH;
// Por convenção, os nomes das constantes são maiúsculos. Ao contrário de uma variável, o nome da constante não começa com o cifrão($).

// OBS: É possível definir constantes que não diferenciam maiúsculas de minúsculas. No entanto, está obsoleto desde o PHP 7.3

// Como variáveis ​​superglobais, você pode acessar constantes de qualquer lugar no script.

// O PHP fornece outra maneira de definir uma constante por meio da palavra-chave const.

// Nesta sintaxe, define o nome da constante após a palavra-chave const. Para atribuir um valor a uma constante usa o operador de atribuição (=) e o valor da constante. O valor constante pode ser escalar, por exemplo, um número, uma string ou uma matriz.

const SALES_TAX = 0.085;

$gross_price = 100;

$net_price = $gross_price * (1 + SALES_TAX);

echo $net_price; // 108.5

// definir vs const
// Primeiro, a define()é uma função enquanto a const é uma construção de linguagem.

// Isso significa que a função define() define uma constante em tempo de execução, enquanto a palavra-chave const define uma constante em tempo de compilação.

// Em outras palavras, você pode usar a função define() para definir uma constante condicionalmente

// Observe que você pode usar a palavra-chave const  para definir constantes dentro de classes .