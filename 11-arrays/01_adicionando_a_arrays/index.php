<?php

// Inicializa um array vazio e o imprime. Neste ponto, o array ainda não contém elementos.
$arr = [];
print_r($arr);  // Exibe o array vazio: Array ( )
echo "<br>";    // Adiciona uma quebra de linha HTML para separar a saída.


// Adiciona o valor 10 no índice 0 do array. O array agora tem um elemento no índice 0.
$arr[0] = 10;
print_r($arr);  // Exibe o array com um elemento: Array ( [0] => 10 )
echo "<br>";    // Adiciona uma quebra de linha HTML para separar a saída.


// Adiciona o valor 15 no índice 1 do array. O array agora tem dois elementos, com índice 0 e 1.
$arr[1] = 15;
print_r($arr);  // Exibe o array com dois elementos: Array ( [0] => 10 [1] => 15 )
echo "<br>";    // Adiciona uma quebra de linha HTML para separar a saída.


// Adiciona o valor 25 no índice 5 do array. Os índices 2, 3 e 4 serão deixados vazios.
$arr[5] = 25;
print_r($arr);  // Exibe o array com elementos nos índices 0, 1 e 5: Array ( [0] => 10 [1] => 15 [5] => 25 )
echo "<br>";    // Adiciona uma quebra de linha HTML para separar a saída.


// Modifica o valor no índice 1 do array, adicionando 55 ao valor atual. O valor no índice 1 passa a ser 70.
$arr[1] += 55;
print_r($arr);  // Exibe o array com o valor atualizado no índice 1: Array ( [0] => 10 [1] => 70 [5] => 25 )
echo "<br>";    // Adiciona uma quebra de linha HTML para separar a saída.


// Inicializa um array associativo vazio e o imprime. Neste ponto, o array associativo ainda não contém elementos.
$arrAssoc = [];
print_r($arrAssoc);  // Exibe o array associativo vazio: Array ( )
echo "<br>";        // Adiciona uma quebra de linha HTML para separar a saída.


// Adiciona um elemento ao array associativo com a chave "carro" e o valor "BMW".
$arrAssoc["carro"] = "BMW";
print_r($arrAssoc);  // Exibe o array associativo com um elemento: Array ( [carro] => BMW )
echo "<br>";        // Adiciona uma quebra de linha HTML para separar a saída.


// Adiciona outro elemento ao array associativo com a chave "avião" e o valor "Boeing".
$arrAssoc["avião"] = "Boeing";
print_r($arrAssoc);  // Exibe o array associativo com dois elementos: Array ( [carro] => BMW [avião] => Boeing )
echo "<br>";        // Adiciona uma quebra de linha HTML para separar a saída.


// Modifica o valor da chave "carro" no array associativo, alterando de "BMW" para "Ferrari".
$arrAssoc["carro"] = "Ferrari";
print_r($arrAssoc);  // Exibe o array associativo com o valor atualizado: Array ( [carro] => Ferrari [avião] => Boeing )
echo "<br>";        // Adiciona uma quebra de linha HTML para separar a saída.

?>
