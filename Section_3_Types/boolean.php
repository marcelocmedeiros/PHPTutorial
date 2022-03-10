<?php
// Um valor booleano representa um valor de verdade. Em outras palavras, um valor booleano pode ser trueou false. PHP usa o booltipo para representar valores booleanos.
//  Essas palavras-chave não diferenciam maiúsculas de minúsculas. 
/*
Os seguintes valores avaliam para false:

A palavra-chavefalse
O inteiro zero (0)
O número de ponto flutuante zero (0,0)
A string vazia ( '') e a string"0"
O NULLvalor
Um array vazio, ou seja, um array com zero elementos
O PHP avalia outros valores para true.
*/
$is_email_valid = false;
echo is_bool($is_email_valid);
// Quando você usa o echopara mostrar um valor booleano, ele mostrará 1para truee zero para false, o que não é intuitivo. Para torná-lo mais óbvio, você pode usar a var_dump()função. 
echo "\n";
var_dump($is_email_valid);

$is_submitted = true;
var_dump($is_submitted);