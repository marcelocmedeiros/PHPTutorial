<?php

// A função PHP array_key_exists()verifica se existe uma chave dentro um array 
// função retorna truese o $keyexistir no arquivo $array. Caso contrário, ele retorna false

// Observe que a função array_key_exists()procura a chave na primeira dimensão da $array única. Se $arrayfor multidimensional , a função array_key_exists() não encontrará o $key na dimensão aninhada.

// O exemplo a seguir usa a função array_key_exists() para verificar se a chave 'admin'existe na $roles matriz:

$roles = [
    'admin' => 1,
    'approver' => 2,
    'editor' => 3,
    'subscriber' => 4
];

$result = array_key_exists('admin', $roles);

var_dump($result); // bool(true)

// O exemplo a seguir retorna falseporque a $rolesmatriz não tem a chave publisher:
$result = array_key_exists('publisher', $roles);

var_dump($result); // bool(false)

// PHP array_key_exists() vs isset()
// Se o valor do elemento array não for null, ambos array_key_exists()e isset()retornarão true se a chave existir em um array e false se não existir. 
// No entanto, se o valor de uma chave for null, o isset()retornará false enquanto a função  array_key_exists()retornar true.
$post = [
	'title' => 'PHP array_key_exists',
	'thumbnail' => null
];

var_dump(array_key_exists('thumbnail', $post)); // bool(true)
var_dump(isset($post['thumbnail'])); // bool(false)