<?php

  // Cria um array de números inteiros
  $arr = [2, 1, 344, 32, 123, 65, 38, 999, 12, 4];

  // Ordena o array em ordem crescente
  sort($arr);

  // Exibe o array ordenado em ordem crescente
  print_r($arr);
  echo "<br><br>";

  // Cria um segundo array de números inteiros com os mesmos valores
  $arr2 = [2, 1, 344, 32, 123, 65, 38, 999, 12, 4];

  // Ordena o segundo array em ordem decrescente
  rsort($arr2);

  // Exibe o segundo array ordenado em ordem decrescente
  print_r($arr2);
  echo "<br><br>";

  // Cria um array de strings com nomes
  $arr3 = ['Thais', 'Rafael', 'Amora', 'Pipoca'];

  // Ordena o array de strings em ordem alfabética crescente
  sort($arr3);

  // Exibe o array de strings ordenado em ordem alfabética crescente
  print_r($arr3);
  echo "<br><br>";

  // Recria o array de strings com os mesmos nomes
  $arr3 = ['Thais', 'Rafael', 'Amora', 'Pipoca'];

  // Ordena o array de strings em ordem alfabética decrescente
  rsort($arr3);

  // Exibe o array de strings ordenado em ordem alfabética decrescente
  print_r($arr3);
  echo "<br><br>";
?>
