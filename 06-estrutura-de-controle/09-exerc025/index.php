<?php

  $opcao1 = 10;
  $opcao2 = 20;
  $opcao3 = "Rafael";

  if (is_int($opcao1) || is_float($opcao1)) {   
 
    $multi1 = $opcao1 * 2;

    if($multi1 > 100){
    
      echo "A opcao1 É SIM maior que 100! <br>";
  
  } else {

    echo "A opcao1 NÂO é maior que 100! <br>";

  }

  } else {
    
    echo "A opcao1 NÂO é um número! <br>";
  
  }


  if (is_int($opcao2) || is_float($opcao2)) {   
 
    $multi1 = $opcao2 * 2;

    if($multi1 > 100){
    
      echo "A opcao2 É SIM maior que 100! <br>";
  
  } else {

    echo "A opcao2 NÂO é maior que 100! <br>";

  }

  } else {
    
    echo "A opcao2 NÂO é um número! <br>";
  
  }

