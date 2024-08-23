<?php

// Definindo variáveis individuais
$marca = "BMW";
$motor = "3.0";
$tetoSolar = true;
$portas = 4;

// Usando a função compact para criar um array associativo
// A função compact pega os nomes das variáveis passadas como strings
// e as transforma em chaves do array, com seus respectivos valores
$carros = compact("marca", "motor", "tetoSolar", "portas");

// Exibindo o array associativo criado pela função compact
print_r($carros);
?>
