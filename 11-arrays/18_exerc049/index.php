<?php

  // Definindo as raças dos animais
  $cachorro = "Vira-lata"; // Raça do cachorro
  $gato = "Siâmes"; // Raça do gato
  $ave = "João de Barro"; // Raça da ave
  $cavalo = "Criolo"; // Raça do cavalo

  // Colocando as raças em um array
  $raçaDeAnimais = compact("cachorro", "gato", "ave", "cavalo");

  // Mostrando o array de raças
  print_r($raçaDeAnimais);
  echo "<br>";

  // Percorrendo o array para mostrar cada raça
  foreach($raçaDeAnimais as $caracteristicas => $value){
    // Mostrando o nome da raça e o valor
    echo "$caracteristicas: $value <br>"; 
  }

?>
