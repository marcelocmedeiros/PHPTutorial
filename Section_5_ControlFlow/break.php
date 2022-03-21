<?php

// A breakinstrução encerra a execução da instrução for, do...while, whileou switch .

// A break instrução aceita um número opcional que especifica o número de estruturas delimitadoras aninhadas a serem quebradas.

// Se você não especificar o número opcional, o padrão será 1. Nesse caso, a breakinstrução apenas encerra a estrutura de fechamento imediata.
echo "==== FOR ====\n";
for ($i = 0; $i < 10; $i++) {
	if ($i === 5) {
		break;
	}
	echo "$i\n";
}
echo "==== Do...While ====\n";
$j = 0;
do {
	if ($j === 5) {
		break;
	}
	echo "$j\n";
	$j++;
} while ($j <= 10);

echo "==== While ====\n";
$k = 0;
while ($k <= 10) {
	if ($k === 5) {
		break;
	}
	echo "$k\n";
	$k++;
}

$i = 0;
$j = 0;
for ($i = 0; $i < 5; $i++) {
	for ($j = 0; $j < 3; $j++) {
		if ($i === 3) {
			break 2;
		}
		echo "($i, $j)\n";
	}
}

// Se você remover o número 2, verá uma saída diferente:
$i = 0;
$j = 0;
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 3; $j++) {
        if ($i === 3) {
            break;
        }
        echo "($i, $j)\n";
    }
}