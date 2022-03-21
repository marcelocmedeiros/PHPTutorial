<?php

// Uma função pode ter zero ou mais parâmetros
// Quando uma função tem vários parâmetros, você precisa separá-los usando uma vírgula ( ,).

function concat($str1, $str2)
{
	return $str1 . $str2;
}

$greeting = concat('Welcome ', 'Admin');
echo $greeting;

// O PHP irá gerar um erro se o número de argumentos que você passar para a função for menor que o número de parâmetros

// Quando você passa vários argumentos para uma função, você pode quebrar a lista de argumentos verticalmente para tornar o código mais legível 

// É uma boa prática listar argumentos verticalmente quando a lista de argumentos é longa.

$counter = 1;
function increase($value)
{
	$value+= 1;
	echo $value. "\n"; // 2
}

// increase the counter
increase($counter);

echo $counter . "\n"; // 1

// O que acontece é que quando você passa o $counterpara a increase()função, a função copia a $countervariável e modifica a cópia. Não altera a variável original. A $countervariável não muda.

// Quando o valor de um argumento dentro da função é alterado e não é alterado fora da função, ele é passado por valor.

// Por padrão, os argumentos são passados ​​por valores em PHP. Se você quiser que uma função altere seus argumentos, você precisa passar os argumentos por referência.

// Para passar um argumento por referência, você adiciona o operador (&) ao nome do parâmetro na definição da função
$counter = 1;
function increase2( &$value )
{
	$value += 1;
	echo $value . "\n"; // 2
}

// increase the counter
increase2($counter);

echo $counter . "\n";