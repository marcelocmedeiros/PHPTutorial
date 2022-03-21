<?php

// A forinstrução permite que você execute um bloco de código repetidamente. A sintaxe da forinstrução é a seguinte:

// for (start; condition; increment) {
//     statement;
// }

// Como funciona.

// O starté avaliado uma vez quando o loop é iniciado.
// O conditioné avaliado uma vez em cada iteração. Se conditionfor true, o statementno corpo será executado. Caso contrário, o loop termina.
// A incrementexpressão é avaliada uma vez após cada iteração.
$total = 0;

for ($i = 1; $i <= 10; $i++) {
	$total += $i;
}

echo $total;

// A instrução for tem a sintaxe alternativa
// for (start; condition; increment):
//     statement;
//  endfor;