<?php

// Cria um array contendo uma sequência de números de 1 a 10, inclusive.
// A função range() gera um array com todos os números no intervalo especificado.
$arr = range(1, 10);
print_r($arr);  // Exibe o array gerado: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 [9] => 10 )
echo "<br>"."<br>";  // Adiciona duas quebras de linha HTML para separar a saída.


// Cria um array contendo uma sequência de números de 5 a 50, inclusive.
// A função range() gera um array com todos os números no intervalo especificado.
$arr2 = range(5, 50);
print_r($arr2);  // Exibe o array gerado: Array ( [0] => 5 [1] => 6 [2] => 7 [3] => 8 [4] => 9 [5] => 10 ... [45] => 50 )
echo "<br>"."<br>";  // Adiciona duas quebras de linha HTML para separar a saída.


// Cria um array contendo uma sequência de números de 0 a 1000, com um passo de 100.
// A função range() gera um array com todos os números no intervalo especificado, com o intervalo definido pelo passo.
$arr3 = range(0, 1000, 100);
print_r($arr3);  // Exibe o array gerado: Array ( [0] => 0 [1] => 100 [2] => 200 [3] => 300 [4] => 400 [5] => 500 [6] => 600 [7] => 700 [8] => 800 [9] => 900 [10] => 1000 )
echo "<br>"."<br>";  // Adiciona duas quebras de linha HTML para separar a saída.

?>
