<?php

  // RESGATAR ELEMENTOS DE ARRAY 
  // REMOVER ELEMENTOS

  // Criação de um array com os valores de 1 a 6
  $arr = [1, 2, 3, 4, 5, 6];

  // Remove 2 elementos a partir do índice 1 e armazena os elementos removidos em $removidos
  $removidos = array_splice($arr, 1, 2);
  
  // Imprime o array após a remoção
  print_r($arr);
  echo "<br>";

  // Imprime os elementos que foram removidos
  print_r($removidos);
  echo "<br>";
?>
