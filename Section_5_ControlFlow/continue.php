<?php

// A continueinstrução é usada dentro de uma estrutura de loop, como for, do...while e while loop. A instrução continue permite pular imediatamente todas as instruções que a seguem e iniciar a próxima iteração desde o início.

// Assim como a breakinstrução, a continueinstrução também aceita um número opcional que especifica o número de níveis de loops delimitadores que serão ignorados.

// Se você não especificar o número que segue a palavra-chave continue, o padrão será 1. Nesse caso, a instrução continue pula apenas para o final da iteração atual.

for ($i = 0; $i < 10; $i++) {
	if ($i % 2 === 0) {
		continue;
	}
	echo "$i\n";
}