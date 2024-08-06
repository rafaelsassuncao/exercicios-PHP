<?php

  // Array numérico
  $arr = [1, 2, 3, 4];
  echo count($arr) . "<br>"; // Conta elementos em $arr

  // Array com range de números
  $arr2 = range(1, 10);
  echo count($arr2) . "<br>"; // Conta elementos em $arr2
  
  // Array associativo
  $arry3 = [
    'nome' => 'Rafael', 
    'idade' => 33, 
    'profissão' => 'Programador', 
    'sexo' => 'Masculino'
  ];
  echo count($arry3) . "<br>"; // Conta pares chave-valor em $arry3

?>
