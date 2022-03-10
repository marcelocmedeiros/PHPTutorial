<?php

// PHP é uma linguagem de programação vagamente tipada. Isso significa que quando você define uma variável , você não precisa declarar um tipo para ela. Internamente, o PHP determinará o tipo pelo contexto em que você usa a variável.

// O PHP tem um recurso chamado type juggling. Isso significa que durante a comparação de variáveis ​​de tipos diferentes, o PHP irá convertê-las para o tipo comum e comparável.
$qty = 20;
if($qty == '20') {
    echo 'Equal';
}
// Por causa do type juggling, o PHP converte a string '20'em um inteiro (20) e a compara com a $qtyvariável. O resultado é true. Portanto, você verá a mensagem Equalna saída.
$total = 100;
$qty = "20";
$total = $total + $qty;

echo $total; // 120
// O tipo de $total é um número inteiro, enquanto o $qty é uma string. Para calcular a soma, o PHP primeiro converte o valor da variável $qty para um inteiro. O resultado é um número inteiro.