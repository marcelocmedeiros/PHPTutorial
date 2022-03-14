<?php

// O operador ternário é uma abreviação para a instrução if...else.

/*
Sintaxe:
$result = condition ? value1 : value2;

Como funciona.

Primeiro. PHP avalia o condition. Se for verdadeiro, a expressão do lado direito retorna o value1; caso contrário, ele retorna o value2.

Segundo, o PHP atribui o resultado da expressão do lado direito à variável $result.

Como você pode ver, usando o operador ternário, você pode tornar o código mais conciso.

Observe que o nome operador ternário vem do fato de que este operador requer três operandos: expression, value1, value2.*/

$is_user_logged_in = false;

$title = $is_user_logged_in ? 'Logout' : 'Login';
echo $title;

/*
O operador ternário abreviado

$result = $initial ?: $default;

Nesta sintaxe, o PHP avalia $initial no contexto booleano. Se $initial for true, o PHP atribui o valor de $initial à variável $result. Caso contrário, ele atribui o $default à variável $result.*/

$path = '/about';
$url = $path ?: '/';

echo $url; // /about
// O exemplo usa o operador ternário abreviado para atribuir o valor de $path ao $url se o $path não estiver vazio. Se o $path estiver vazio, o operador ternário atribui a string literal '/' ao $url