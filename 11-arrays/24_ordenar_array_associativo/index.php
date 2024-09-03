<?php

  // Criando um array associativo com nomes e idades
  $arr = [
    'Rafael' => 33,
    'Thais' => 31,
    'Rute' => 65,
    'Gabriel' => 27,
  ];

  // Ordenando o array pelos valores (idades) de forma crescente
  asort($arr);
  
  // Exibindo o array ordenado
  print_r($arr);
  echo '<br><br>';


  // Criando outro array associativo com os mesmos dados
  $arr2 = [
    'Rafael' => 33,
    'Thais' => 31,
    'Rute' => 65,
    'Gabriel' => 27,
  ];

  // Ordenando o array pelos valores (idades) de forma decrescente
  arsort($arr2);
  
  // Exibindo o array ordenado
  print_r($arr2);
  echo '<br><br>';

  // Criando mais um array associativo com os mesmos dados
  $arr3 = [
    'Rafael' => 33,
    'Thais' => 31,
    'Rute' => 65,
    'Gabriel' => 27,
  ];

  // Ordenando o array pelas chaves (nomes) em ordem alfabética
  ksort($arr3);
  
  // Exibindo o array ordenado
  print_r($arr3);
  echo '<br><br>';

?>
