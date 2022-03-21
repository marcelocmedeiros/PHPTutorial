<?php

// O escopo de uma variável determina qual parte do código pode acessá-la. 

/*
No PHP, as variáveis ​​têm quatro tipos de escopos:

Local
Global
Estático
Parâmetros de função*/

// Local variables
// Quando você define uma variável dentro de uma função , você só pode acessar essa variável dentro da função. E diz-se que a variável é local à função.

function say()
{
	$message = 'Hi';
	echo $message;
}

say();

// Variáveis ​​globais
// Quando você declara uma variável fora de uma função, a variável é global. Isso significa que você pode acessar a variável em qualquer lugar dentro do script, exceto dentro de uma função.

$message = 'Hello';

function say2()
{
	$message = "Hi\n";
	echo $message;
}

say2();
echo $message; // Hello

// O PHP permite que você acesse uma variável global dentro de uma função usando a palavra-chave global.

$message = 'Hello';

function say3()
{
	global $message;
	echo $message; // Hello
}

say3();

// O PHP tem uma lista de variáveis ​​embutidas, que são conhecidas como variáveis ​​superglobais. As variáveis ​​superglobais fornecem informações sobre o ambiente do script PHP.

// As variáveis ​​superglobais estão sempre disponíveis em todas as partes do script. A tabela a seguir mostra a lista de variáveis ​​superglobais do PHP

/*
Superglobais	Significado
$ GLOBAIS	    Retorna uma matriz que contém variáveis ​​globais. Os nomes das variáveis ​​são usados ​​para selecionar qual parte da matriz acessar.

$_SERVER	    Retorna dados sobre o ambiente do servidor web.
$_GET	        Retornar dados de GETsolicitações.
$_POST	        Retornar dados de POSTsolicitações.
$ _COOKIE	    Retornar dados de cookies HTTP
$_FILES	        Retornar dados de uploads de arquivos POST.
$_ENV	        Retorna informações sobre o ambiente do script.
$_REQUEST	    Retornar dados da solicitação HTTP
$_SESSION	    Variáveis ​​de retorno registradas em uma sessão
*/

// Variáveis ​​estáticas
// Uma variável estática retém seu valor entre chamadas de função. Além disso, uma variável estática só é acessível dentro da função. Para definir uma variável estática, você usa a  palavra-chave static.

function get_counter() {
    static $counter = 1;
    return $counter++;
}

echo get_counter() .  "\n"; // 1
echo get_counter() .  "\n"; // 2
echo get_counter() .  "\n"; // 3

// Parâmetros de função
// Os parâmetros da função são locais para a função. Portanto, os parâmetros da função só podem ser acessíveis dentro da função. 

function sum($items) {
    $total = 0;
    foreach($items as $item) {
        $total += $item;
    }
    return $total;
}

// $items cannot be accessible here
echo sum([10,20,30]);