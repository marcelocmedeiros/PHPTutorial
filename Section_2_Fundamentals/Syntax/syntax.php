<?php
	echo 'PHP Syntax';

/*
Assim como o HTML, você precisa ter a tag de abertura para iniciar o código PHP:

<?php

Se você misturar código PHP com HTML, precisará ter a tag de fechamento:

?>

No entanto, se um arquivo contém apenas código PHP, a tag de fechamento é opcional como no exemplo acima.

==> Diferenciação de maiúsculas e minúsculas

O PHP é parcialmente sensível a maiúsculas e minúsculas. Saber o que diferencia maiúsculas de minúsculas e o que não é é muito importante para evitar erros de sintaxe.

Se você tiver uma função como count, poderá usá-la como COUNT. Funcionaria direitinho.

Os itens a seguir não diferenciam maiúsculas de minúsculas em PHP:

Construções PHP como if , if-else , if-elseif , switch , while , do-while , etc.
Palavras-chave como truee false.
Função definida pelo usuário e nomes de classe .
Por outro lado, as variáveis ​​diferenciam maiúsculas de minúsculas. por exemplo, $messagee $MESSAGEsão variáveis ​​diferentes.

==> Afirmações

Um script PHP normalmente consiste em uma ou mais instruções. Uma instrução é um código que faz algo, por exemplo, atribuir um valor a uma variável e chamar uma função.

Uma instrução sempre termina com um ponto e vírgula ( ;). Veja a seguir uma instrução que atribui uma string literal à $messagevariável:

$message = "Hello";

O exemplo acima é uma declaração simples. O PHP também possui uma instrução composta que consiste em uma ou mais instruções simples. Uma instrução composta usa chaves para marcar um bloco de código. Por exemplo:

if( $is_new_user ) {
    send_welcome_email();
}

Você não precisa colocar o ponto e vírgula após a chave ( }).

A tag de fechamento de um bloco PHP ( ?>) implica automaticamente um ponto e vírgula ( ;). Portanto, você não precisa colocar um ponto e vírgula na última instrução em um bloco PHP. Por exemplo:

<?php echo $name ?>

Neste exemplo, a instrução echo $namenão precisa de ponto e vírgula. No entanto, usar um ponto e vírgula para a última instrução em um bloco também deve funcionar bem. Por exemplo:

<?php echo $name; ?>

==> Espaços em branco e quebras de linha

Na maioria dos casos, espaços em branco e quebras de linha não têm significado especial em PHP. Portanto, você pode colocar uma instrução em uma linha ou espalhá-la por várias linhas.

Por exemplo, os seguintes snippets de código são equivalentes:

login( $username, $password );

E:

login( 
   $username,
   $password
);

==> Resumo
O PHP é parcialmente sensível a maiúsculas e minúsculas.
Construções PHP, nomes de funções, nomes de classes não diferenciam maiúsculas de minúsculas, enquanto variáveis ​​diferenciam maiúsculas de minúsculas.
Uma instrução termina com um ponto e vírgula (;).
Espaços em branco e quebras de linha não importam no PHP; aproveite-os para tornar o código mais legível.
*/
