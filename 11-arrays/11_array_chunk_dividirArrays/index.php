<?php

// Cria um array com números de 1 a 20
$arr = range(1, 20);

// Divide o array original em pedaços menores, cada um com 4 elementos
print_r(array_chunk($arr, 4));
echo '<br><br>';

// Divide o array original em pedaços menores, cada um com 10 elementos
$arrayS = array_chunk($arr, 10);

print_r($arrayS);
echo "<br><br>";

// Exibe o segundo pedaço do array resultante (que contém os elementos de 11 a 20)
print_r($arrayS[1]);
echo '<br>';
?>
