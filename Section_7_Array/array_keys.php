<?php

// A função PHP array_keys() aceita um array e retorna todas as chaves ou um subconjunto das chaves do array.
// função retorna uma matriz que contém todas as chaves na matriz de entrada.

$numbers = [10, 20, 30];

$keys = array_keys($numbers);

print_r($keys);

// O exemplo a seguir ilustra como usar a array_keys()função com uma matriz associativa
$user = [
	'username' => 'admin',
	'email' => 'admin@phptutorial.net',
	'is_active' => '1'
];

$properties = array_keys($user);

print_r($properties);

// O exemplo a seguir usa a array_keys()função para obter as chaves cujos valores são iguais a 1:
$user = [
	'username' => 'admin',
	'email' => 'admin@phptutorial.net',
	'is_active' => '1'
];

$properties = array_keys($user, 1);

print_r($properties);
// A função array_keys()retorna uma chave, que é is_active. No entanto, o is_activecontém a string '1', não o número 1. Isso ocorre porque o array_keys()usa o operador de igualdade (==) para comparação na pesquisa por padrão.

// Para habilitar a comparação de igualdade estrita (===) ao pesquisar, você passa true como o terceiro argumento da função array_keys() assim:

$user = [
	'username' => 'admin',
	'email' => 'admin@phptutorial.net',
	'is_active' => '1'
];

$properties = array_keys($user, 1, true);

print_r($properties);

// A função a seguir retorna as chaves de uma matriz, que passam em um teste especificou um retorno de chamada
function array_keys_by(array $array, callable $callback): array
{
	$keys = [];
	foreach ($array as $key => $value) {
		if ($callback($key)) {
			$keys[] = $key;
		}
	}

	return $keys;
}

// O exemplo a seguir usa a função array_keys_by() acima para localizar as chaves que contêm a string '_post'
$permissions = [
	'edit_post' => 1,
	'delete_post' => 2,
	'publish_post' => 3,
	'approve' => 4,
];

$keys = array_keys_by($permissions, function ($permission) {
	return strpos($permission, 'post');
});

print_r($keys);