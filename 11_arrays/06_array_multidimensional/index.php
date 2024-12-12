<?php

  // Criando um array multidimensionais
  $arr = [
    [1, 2, 3], // Primeiro array dentro do array principal
    [2, 4, 6], // Segundo array dentro do array principal
  ];

  // Imprime o array completo de forma legível
  print_r($arr);
  echo "<br>"; // Quebra de linha

  // Acessa e imprime o segundo elemento do primeiro array (valor: 2)
  echo $arr[0][1] . "<br>";

  // Acessa e imprime o terceiro elemento do segundo array (valor: 6)
  echo $arr[1][2] . "<br>";
?>
