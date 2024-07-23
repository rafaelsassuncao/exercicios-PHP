<?php

  $veiculos = "carro - navio - helicóptero - barco - jangada";

  $veiculosArray = explode(" - ", $veiculos);
  print_r($veiculosArray);
  echo "<br>";
  echo "<br>";

  for($i = 0; $i < count($veiculosArray); $i++) {

    $itensArrayVeiculo = $veiculosArray[$i];
    echo "item: $itensArrayVeiculo <br>";

  }