<?php

// Cria um array indexado com três elementos: 1, 2 e 3.
$arr = [1, 2, 3];

// Adiciona o valor 4 ao final do array. O PHP automaticamente atribui o próximo índice disponível, que é 3.
$arr[] = 4;
print_r($arr);  // Exibe o array atualizado: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
echo "<br>";    // Adiciona uma quebra de linha HTML para separar a saída.


// Adiciona o valor 5 ao final do array. O PHP atribui o próximo índice disponível, que é 4.
$arr[] = 5;
print_r($arr);  // Exibe o array atualizado: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )
echo "<br>";    // Adiciona uma quebra de linha HTML para separar a saída.


// Cria um novo array indexado vazio.
$arr2 = [];

// Adiciona o valor 2 ao final do array. O PHP atribui o índice 0 a este valor.
$arr2[] = 2;
print_r($arr2);  // Exibe o array com um elemento: Array ( [0] => 2 )
echo "<br>";    // Adiciona uma quebra de linha HTML para separar a saída.


// Cria um novo array associativo vazio.
$arr3 = [];

// Adiciona um elemento ao array associativo com a chave "teste" e o valor "testando".
$arr3['teste'] = 'testando';
print_r($arr3);  // Exibe o array associativo com um elemento: Array ( [teste] => testando )
echo "<br>";    // Adiciona uma quebra de linha HTML para separar a saída.

?>
