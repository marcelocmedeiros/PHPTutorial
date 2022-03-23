<?php

// A função in_array() retorna truese existir um valor em uma matriz.

// Se o valor a ser verificado for uma string, a in_array()função irá procurá-lo diferenciando maiúsculas de minúsculas.

// O exemplo a seguir usa a in_array()
$actions = [
	'new',
	'edit',
	'update',
	'view',
	'delete',
];

$result = in_array('update', $actions);

var_dump($result); // bool(true)

$result = in_array('publish', $actions);

var_dump($result); // bool(false)

$result = in_array('New', $actions);

var_dump($result); // bool(false)


// a função in_array() do PHP com o exemplo de comparação estrita
// O exemplo a seguir usa a in_array()função para localizar o número 15na $user_idsmatriz. Ele retorna trueporque a in_array()função compara os valores usando a comparação solta ( ==)
$user_ids = [10, '15', '20', 30];

$result = in_array(15, $user_ids);

var_dump($result); //  bool(true)

// Para usar a comparação estrita, você passa falsepara o terceiro argumento ( $strict) da in_array()função da seguinte forma
$result = in_array(15, $user_ids, true);

var_dump($result); //  bool(false)

//  in_array() com o valor pesquisado é um exemplo de array
$colors = [
	['red', 'green', 'blue'],
	['cyan', 'magenta', 'yellow', 'black'],
	['hue', 'saturation', 'lightness']
];

if (in_array(['red', 'green', 'blue'], $colors)) {
	echo 'RGB colors found';
} else {
	echo 'RGB colors are not found';
}

//  in_array() com um exemplo de array de objetos

// O seguinte define a Roleclasse que tem duas propriedades $ide $name
class Role
{
	private $id;

	private $name;

	public function __construct($id, $name)
	{
		$this->id = $id;
		$this->name = $name;
	}
}
// Este exemplo ilustra como usar a in_array()função para verificar se Roleexiste um objeto em uma matriz de objetos Role 

// Role class

$roles = [
	new Role(1, 'admin'),
	new Role(2, 'editor'),
	new Role(3, 'subscribe'),
];

if (in_array(new Role(1, 'admin'), $roles)) {
	echo 'found it';
}

// Se você definir $strictcomo true, a in_array()função comparará objetos usando suas identidades em vez de valores. Por exemplo:

// Role class

$roles = [
	new Role(1, 'admin'),
	new Role(2, 'editor'),
	new Role(3, 'subscribe'),
];

if (in_array(new Role(1, 'admin'), $roles, true)) {
	echo 'found it!';
} else {
	echo 'not found!';
}