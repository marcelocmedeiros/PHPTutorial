<?php

// O operador lógico OR aceita dois operandos e retorna true se um dos operandos for verdadeiro; caso contrário, ele retorna false. Em outras palavras, o operador lógico OR retorna false se ambos os operandos forem false.

// PHP usa a palavra- orchave ou o da ||

// Observe que or, Ore ORsão iguais porque as palavras-chave do PHP não diferenciam maiúsculas de minúsculas.

// Os operadores ||e retornam o mesmo resultado. orA única diferença entre os operadores ||e orsão suas precedências. O oroperador tem precedência mais alta que o ||operador.
echo"\n====Verdadeiro=====\n";
$expired = true;
$purged = false;

$clear_cache = $expired || $purged;

var_dump($clear_cache);

echo"\n====Falso=====\n";
$expired = false;
$purged = false;

$clear_cache = $expired || $purged;

var_dump($clear_cache);
// Quando o primeiro operando é true, o operador lógico OR sabe que o resultado também deve ser true. Neste caso, não avalia o segundo operando. Esse processo é chamado de curto-circuito.

echo"\n==As pegadinhas do PHP OR==\n";
echo"\n====Falso=====\n";
$result = false or true;

var_dump($result);
// O PHP avalia o $result = falseprimeiro e depois o orsegundo operador porque o =operador tem maior precedência do que o oroperador.
echo"\n====Verdadeiro=====\n";
$result = (false or true);

var_dump($result);

$result = false || true;
var_dump($result);
// Portanto, é uma boa prática sempre usar o ||operador em vez do operador or .