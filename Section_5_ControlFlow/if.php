<?php

// A instrução if permite que você execute uma instrução se uma expressão for avaliada como true.
/*
if ( expression ) 
    statement;
Nesta sintaxe, o PHP avalia o expressionprimeiro. Se o expressionresultado for true, o PHP executará o statement. Caso a expressão seja avaliada como false, o PHP ignora o statement.
*/
$is_admin = true;
if ($is_admin)
    echo 'Welcome, admin!';

// e você deseja executar várias instruções no bloco if, você pode usar chaves para agrupar várias instruções como esta

$can_edit = false;
$is_admin = true;

if ( $is_admin ) {
   echo "Welcome, admin!\n";
   $can_edit = true;
   var_dump($can_edit);
}

// É uma boa prática sempre usar chaves com a ifinstrução, mesmo que ela tenha uma única instrução

// É possível aninhar uma ifinstrução dentro de outra instrução if da seguinte maneira

$is_admin = true;
$can_approve = true;

if ($is_admin) {
	echo "Welcome, admin!\n";
	if ($can_approve) {
		echo 'Please approve the pending items';
	}
}

/*
Para incorporar uma ifinstrução em um documento HTML, você pode usar a sintaxe acima. No entanto, o PHP fornece uma sintaxe melhor que permite misturar bem a instrução if com HTML:

<?php if ( expession) : ?>
<!-- HTML code here -->
<?php endif; ?>
*/

/* 
Um erro comum com a instrução if do PHP
$checked = 'on';
if( $checked = 'off' ) {
   echo 'The checkbox has not been checked';
}
Ele não compara o valor da $checked variável com o 'off'valor. Portanto, a expressão sempre é avaliada como true, o que não é correto.

Se você acidentalmente usar o operador de atribuição (=), o PHP irá gerar um erro de sintaxe: Parse error: syntax error, unexpected '=' ...

Para evitar esse erro, você pode colocar o valor primeiro antes do operador de comparação e a variável depois do operador de comparação assim:
*/

$checked = 'on';
if('off' == $checked ) {
   echo 'The checkbox has not been checked';
}
/*
Resumo
A ifinstrução executa uma instrução para a qual ifuma condição é avaliada true.

Sempre use chaves mesmo se você tiver uma única instrução para executar na ifinstrução. Isso torna o código mais óbvio.

Use o padrão if ( value == $variable_name ) {}para evitar possíveis erros.
*/