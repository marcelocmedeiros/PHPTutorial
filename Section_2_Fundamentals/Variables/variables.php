<?php

/*
==> Definir uma variável
Uma variável armazena um valor de qualquer tipo, por exemplo, uma  string , um número , um  array ou um  objeto .

Uma variável tem um nome e está associada a um valor. Para definir uma variável, você usa a seguinte sintaxe:

$variable_name = value;

Ao definir uma variável, você precisa seguir estas regras:

O nome da variável deve começar com o cifrão ( $).
O primeiro caractere após o cifrão ( $) deve ser uma letra ( a-z) ou o sublinhado ( _).
Os caracteres restantes podem ser sublinhados, letras ou números.
As variáveis ​​PHP diferenciam maiúsculas de minúsculas. Isso significa que $messagee $Message as variáveis ​​são totalmente diferentes.

O exemplo a seguir define uma variável chamada $title:
*/

$title = "PHP is awesome!";
$Title = "Sou outra Variável";

echo $title."\n";
echo $Title;