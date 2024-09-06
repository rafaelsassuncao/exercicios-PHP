<?php

  $arr1 = [1, 2, 3];
  $arr2 = [2, 4, 6];

  // A função array_diff() compara os arrays e retorna os elementos que estão no $arr1 mas não no $arr2
  $diferentes = array_diff($arr1, $arr2);

  // Imprime os elementos diferentes entre $arr1 e $arr2
  print_r($diferentes);
  echo "<br>";

  // A função array_diff() agora retorna os elementos que estão no $arr2 mas não no $arr1
  $diferentes2 = array_diff($arr2, $arr1);

  // Imprime os elementos diferentes entre $arr2 e $arr1
  print_r($diferentes2);
  echo "<br>";

  $arr3 = [4, 6];

  // A função array_diff() compara $arr1 com $arr2 e $arr3, retornando os elementos únicos em $arr1
  $diferentes3 = array_diff($arr1, $arr2, $arr3);

  // Imprime os elementos diferentes entre $arr1, $arr2 e $arr3
  print_r($diferentes3);
  echo "<br>";
