<?php

  // Criação de um array com números inteiros e um número decimal
  $arr = [2, 4, 34, 34.1, 321, 12, 34, 1];

  // A função array_sum() soma todos os valores do array e armazena o resultado na variável $soma
  $soma = array_sum($arr);

  print_r($arr);
  echo '<br>';
  echo $soma; // Exibe o valor total da soma dos elementos do array
