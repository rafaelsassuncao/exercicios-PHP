<?php

  $nomes = ["Rafael", "Thais", "Amora", "Pipoca"];

  $a = 10;

  // no foreach indico a array e depois os itens
  foreach($nomes as $nome){
    echo "O nome do índice atual é: $nome <br>";

    if($nome == "Amora"){
      echo "Te achei macadânia $a <br>";
    }

  }