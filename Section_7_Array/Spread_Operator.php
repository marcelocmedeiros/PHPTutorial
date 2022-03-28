<?php

// O PHP 7.4 introduziu o operador spread na expressão array . O PHP usa os três pontos (...) para denotar o operador de propagação.

// Quando você prefixa um array com o operador spread, o PHP irá espalhar os elementos do array no lugar:
$numbers = [4,5];
$scores = [1,2,3, ...$numbers];

print_r($scores);

// O operador spread oferece melhor desempenho do que a função array_merge() porque é uma construção de linguagem enquanto o array_merge()é uma chamada de função. Além disso, o PHP otimiza o desempenho para arrays constantes em tempo de compilação.

// Ao contrário da descompactação de argumentos, você pode usar o operador spread em qualquer lugar. 
$numbers = [1,2];
$scores = [...$numbers, 3, 4];

print_r($scores);

// o operador spread no meio de uma matriz
$numbers = [2,3];
$scores = [1, ...$numbers, 4];

print_r($scores);

// O PHP permite que você use o operador spread várias vezes.
$even = [2, 4, 6];
$odd = [1, 2, 3];
$all = [...$odd, ...$even];

print_r($all);

//  operador spread com um valor de retorno de uma função:
function get_random_numbers()
{
    for ($i = 0; $i < 5; $i++) {
        $random_numbers[] = rand(1, 100);
    }
    return $random_numbers;
}

$random_numbers = [...get_random_numbers()];

print_r($random_numbers);

// Usando o operador de propagação PHP com um gerador
// No exemplo a seguir, primeiro, definimos um gerador que retorna números pares entre 2 e 10. Em seguida, usamos o operador spread para distribuir o valor retornado do gerador em um array
function even_number()
{
    for($i =2; $i < 10; $i+=2){
        yield $i;
    }
}

$even = [...even_number()];

print_r($even);

// O PHP permite que você aplique o operador spread não apenas a um array, mas também a qualquer objeto que implemente a Traversable interface.
class RGB implements IteratorAggregate
{
    private $colors = ['red','green','blue'];

    public function getIterator()
    {
        return new ArrayIterator($this->colors);
    }
}

$rgb = new RGB();
$colors = [...$rgb];

print_r($colors); 


// O PHP 8 permite que você chame uma função usando argumentos nomeados
function format_name(string $first, string $middle, string $last): string
{
    return $middle ?
        "$first $middle $last" :
        "$first $last";
}

echo format_name(
    first: 'John',
    middle: 'V.',
    last: 'Doe'
); // John V. Doe

//Além disso, você pode passar os argumentos para a função format_name usando o operador spread:
function format_name(string $first, string $middle, string $last): string
{
    return $middle ?
        "$first $middle $last" :
        "$first $last";
}


$names = [
    'first' => 'John',
    'middle' => 'V.',
    'last' => 'Doe'
];

echo format_name(...$names); // John V. Doe