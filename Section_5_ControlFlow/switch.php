<?php

// Quando o valor de uma única variável especifica o número de opções diferentes, é muito mais simples usar a instrução switch 

$role = 'admin';
$message = '';

switch ($role) {
	case 'admin':
		$message = 'Welcome, admin!';
		break;
	case 'editor':
		$message = 'Welcome! You have some pending articles to edit';
		break;
	case 'author':
		$message = 'Welcome! Do you want to publish the draft article?';
		break;
	case 'subscriber':
		$message = 'Welcome! Check out some new articles.';
		break;
	default:
		$message = 'You are not authorized to access this page';
}

echo $message;
/*
A instrução switch compara uma expressão com o valor em cada caso.

Se a expressão for igual a um valor em um caso, por exemplo, value1, o PHP executa o bloco de código no caso correspondente até encontrar a primeira instrução break.

Se não houver correspondência e o default estiver disponível, o PHP executará todas as instruções após a palavra-chave default.

Caso o default não seja especificado e não haja correspondência, o controle é passado para a instrução que segue a instrução switch.

/*
Sintaxe alternativa da instrução PHP switch

<?php

switch (expression):
	case value1:
		// code block 1
		break;
	case value2:
		// code block 2
		break;

	default:
		// default code block
		break;
endswitch;

A sintaxe alternativa é adequada para misturar com o código HTML.*/
