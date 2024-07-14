<?php

  $frase = "O rato roeu a roupa do rei de Roma";
  
  $letraSelecionada = 0;

  for($i = 0; $i < strlen($frase);$i++){

    if($frase[$i] === "a"){
      $letraSelecionada++;
    }
    
  }  

  echo "O numero de 'As' na frase é de : $letraSelecionada";