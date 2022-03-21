<?php

// Como funciona.

// Primeiro, o PHP avalia o expression. Se o resultado for true, o PHP executa o arquivo statement.
// Então, o PHP reavalia o expressionnovamente. Se ainda estiver true, o PHP executa a instrução novamente. No entanto, se expressionfor false, o loop termina.
// Se a expressionavaliação for falseantes do início da primeira iteração, o loop terminará imediatamente.
$total = 0;
$number = 1;

while ($number <= 10) {
	$total += $number;
	$number++;
}

echo $total;