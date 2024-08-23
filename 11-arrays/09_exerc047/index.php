<?php

// Cria um array com informações sobre um carro
$carro = ['Jaguar', "3.0", 'azul', 18, 'teto solar', 'automático'];

// Exibe o conteúdo do array $carro
print_r($carro);
echo "<br><br>";

// Desestrutura o array $carro em variáveis individuais
list($marca, $motor, $cor, $aro, $tipoTeto, $cambio) = $carro;

// Exibe o valor de cada variável
echo $marca . '<br>'; // Exibe a marca do carro
echo $motor . '<br>'; // Exibe o tamanho do motor
echo $cor . '<br>';   // Exibe a cor do carro
echo $aro . '<br>';   // Exibe o tamanho do aro das rodas
echo $tipoTeto . '<br>'; // Exibe o tipo de teto do carro
echo $cambio . '<br>'; // Exibe o tipo de câmbio do carro

?>
