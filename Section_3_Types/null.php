<?php
// O nullé um tipo especial em PHP. O nulltipo tem apenas um valor que também é null. Na verdade, nullindica a ausência de um valor para uma variável.

$email = null;
var_dump($email); // NULL

// Além disso, quando você usa a unset()função para desarmar uma variável, a variável também é nula.
echo "\n";
$email_2 = 'webmaster@phptutorial.net';
unset($email_2);

var_dump($email_2); // NULL

// PHP não diferenciam maiúsculas de minúsculas. Portanto, NULL também não diferencia maiúsculas de minúsculas. Isso significa que você pode usar null, Nullou NULLpara representar o null

// É uma boa prática manter seu código consistente. Se você usar null em minúsculas em um lugar, você também deve usá-lo em toda a sua base de código.

// Para verificar se uma variável é nullou não, você usa a is_null()função. A is_null()função retorna truese uma variável for null; caso contrário, ele retorna false.
$email = null;
var_dump(is_null($email)); // bool(true)

$home = 'phptutorial.net';
var_dump(is_null($home)); // bool(false)

// Para testar se uma variável é nullou não, você também pode usar o operador idêntico ===. 

$email = null;
$result = ($email === null);
var_dump($result); // bool(true)

$home= 'phptutorial.net';
$result = ($home === null);
var_dump($result); // bool(false)