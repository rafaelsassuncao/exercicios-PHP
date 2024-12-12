<?php

// Define uma string
$frase = "testando o case de uma palavra <br>";

// Define outra string com a primeira letra maiúscula
$frase2 = "Testando o case de uma palavra <br>";

// Define uma terceira string igual à primeira
$frase3 = "testando o case de uma palavra <br>";

// Primeira letra em maiúscula
// Usa a função ucfirst para converter a primeira letra da string $frase em maiúscula
echo ucfirst($frase);

// Usa a função ucfirst para converter a primeira letra da string $frase2 em maiúscula
echo ucfirst($frase2);

// Todas as palavras com as iniciais em maiúscula
// Usa a função ucwords para converter a primeira letra de cada palavra na string $frase3 em maiúscula
echo ucwords($frase3);

// Usa a função ucwords para converter a primeira letra de cada palavra na string $frase2 em maiúscula
echo ucwords($frase2);

?>
