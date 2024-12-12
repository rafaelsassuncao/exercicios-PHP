<?php

function numAoQuadrado($num) {

  $resultado = $num ** 2;

  return $resultado;

}

echo numAoQuadrado(2) . "<br>";

$number = numAoQuadrado(4);

echo $number . "<br>";

$num = numAoQuadrado(123);

echo $num . "<br>";



// Abaixo foi a forma que eu conclui o exercicio, e acima a forma que como o professor executou !

  // function valorAoQuadrado($num, $exp = 2) {

  //    echo $num . " elevado a potencia " . $exp . " é: " . pow($num, $exp). "<br>";
  
  // }

  // valorAoQuadrado(8);
  // valorAoQuadrado(4);
  // valorAoQuadrado(10);