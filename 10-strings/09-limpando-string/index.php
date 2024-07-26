<?php

// Define uma string com espaços em branco no início e no fim
$str1 = "   Rafael   ";

// Imprime a string original com espaços
echo "Esta é a string 1: $str1. <br>";

// Usa a função trim para remover os espaços em branco do início e do fim da string $str1
$str1Limpa = trim($str1);

// Imprime a string sem os espaços em branco do início e do fim
echo "Esta é a string 1 Limpa: $str1Limpa. <br>";

// Usa a função rtrim para remover os espaços em branco somente do fim da string $str1
$str1Limpa2 = rtrim($str1);

// Imprime a string sem os espaços em branco do fim
echo "Esta é a string 2 Limpa: $str1Limpa2. <br>";

?>
