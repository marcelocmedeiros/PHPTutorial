<?php

/*
A instrução pode ter uma ou mais cláusulas if opcionais. elseif O elseif é uma combinação de ife else:

<?php

if (expression1) {
	statement;
} elseif (expression2) {
	statement;
} elseif (expression3) {
	statement;
}
O PHP avalia expression1 e executa o bloco de código navcláusula if  se expression1 for true.

Se expression1 for false, o PHP avalia o expression2 na próxima cláusula elseif. Se o resultado for true, então o PHP executa a instrução nesse bloco elseif . Caso contrário, o PHP avalia o arquivo expression3.

Se expression3 for true, o PHP executa o bloco que segue a  cláusula elseif. Caso contrário, o PHP o ignora.

Observe que quando uma instrução if tem várias cláusulas elseif, o elseif será executado somente se a expressão na cláusula if ou elseif anterior for avaliada como false.*/

$x = 10;
$y = 20;

if ($x > $y) {
	$message = 'x is greater than y';
} elseif ($x < $y) {
	$message = 'x is less than y';
} else {
	$message = 'x is equal to y';
}

echo $message;

/*
Sintaxe alternativa do PHP if elseif
O PHP também suporta uma sintaxe alternativa para o elseif sem usar chaves como o seguinte:

<?php
if (expression):
	statement;
elseif (expression2):
	statement;
elseif (expression3):
	statement;
endif; 

Nesta sintaxe:

Use um ponto e vírgula (:) após cada condição após a palavra-chave if ou elseif.
Use a palavra-chave endif em vez de uma chave ( }) no final da instrução if.*/

$x = 20;
$y = 20;

if ($x > $y) :
	$message = 'x is greater than y';
elseif ($x < $y):
	$message = 'x is less than y';
else:
	$message = 'x is equal to y';
endif;

echo $message;

// PHP permite que você escreva else if(em duas palavras) que tenha o mesmo resultado que elseif(em uma única palavra)
/*
Resumo
Use a instrução if...elseif para avaliar várias expressões e executar blocos de código condicionalmente.
Apenas a sintaxe if...elseif alternativa suporta, o if...else if não.

Use o elseifsempre que possível para tornar seu código mais consistente.
*/