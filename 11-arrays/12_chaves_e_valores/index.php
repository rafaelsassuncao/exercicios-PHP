<?php

// Definindo um array associativo com informações sobre um carro
$carro = [
    'marca' => 'BMW',          
    'motor' => '2.4',          
    'teto_solar' => true,      
    'cambio' => 'Manual',      
    'portas' => 4,          
];

// Pegando todas as chaves do array $carro
$chaves = array_keys($carro);
print_r($chaves);
echo '<br>'; 

// Pegando todos os valores do array $carro
$valores = array_values($carro);
print_r($valores);
echo '<br>';
