<?php

// o operador lógico NOT aceita apenas um operando e nega o operando.
// o operador lógico NOT retorna truese o operando for falsee retorna falsese o operando for true.

// O PHP usa a palavra-chave not e ( !) para representar o operador lógico NOT.

$priority = 5;
var_dump( ! $priority < 5 );

// Neste exemplo, o PHP avalia a expressão ! $priority < 5na seguinte ordem:

// Primeiro, $priority < 5avalia para false.
// Em segundo lugar, ! falseavalia para true.