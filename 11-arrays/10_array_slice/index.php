<?php

// Criando um array com números pares de 2 a 18
$arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];

// Extraindo um subconjunto do array começando no índice 1 e pegando 3 elementos
$arrSlice1 = array_slice($arr, 1, 3);
print_r($arrSlice1); // Mostrando o subconjunto extraído
echo "<br>";

// Extraindo outro subconjunto começando no índice 4 e pegando 4 elementos
$arrSlice2 = array_slice($arr, 4, 4);
print_r($arrSlice2); // Mostrando o subconjunto extraído
echo "<br>";

// Extraindo um subconjunto começando no índice 4 até o final do array
$arrSlice3 = array_slice($arr, 4);
print_r($arrSlice3); // Mostrando o subconjunto extraído
echo "<br>";

// Extraindo um subconjunto começando no índice 4 e terminando 3 elementos antes do final
$arrSlice4 = array_slice($arr, 4, -3);
print_r($arrSlice4); // Mostrando o subconjunto extraído
echo "<br>";
