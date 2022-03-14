<?php

// Às vezes, você deseja executar outro bloco de código se o expressionfor false. Para fazer isso, você adiciona a cláusula  else à instrução if

/*
if ( expression ) {
    // code block
} else {
    // another code block
}
Linguagem de código:  HTML, XML  ( xml )
Nesta sintaxe, se expressão for true, o PHP executa o bloco de código que segue a cláusula if. Se expressão for false, o PHP executa o bloco de código que segue a palavra-chave else.*/

$is_authenticated = false;

if ( $is_authenticated ) {
    echo 'Welcome!';
} else {
    echo 'You are not authorized to access this page.';
}

/*
PHP if… else declaração em HTML
<?php if ( expression ): ?>
<!--Show HTML code when expression is true -->
<?php else: ?>
<!--Show HTML code when expression is false -->
<?php endif ?>
Observe que você não precisa colocar um ponto e vírgula ( ;) após a palavra- endifchave porque endifé a última instrução no bloco PHP. A tag envolvente ?>automaticamente implica um ponto e vírgula.
*/