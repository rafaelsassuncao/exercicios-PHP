<?php

  // Esta é a frase onde vamos contar a letra 'a'
  $frase = "O rato roeu a roupa do rei de Roma";

  // Esta variável vai contar quantas vezes a letra 'a' aparece
  $letraSelecionada = 0;

  // Usamos um loop para passar por cada letra da frase
  for($i = 0; $i < strlen($frase); $i++){
    
    // Se a letra na posição $i for 'a', incrementamos a contagem
    if($frase[$i] === "a"){
      $letraSelecionada++;
    }
    
  }  

  // Exibimos o número de vezes que a letra 'a' aparece na frase
  echo "O numero de 'As' na frase é de : $letraSelecionada";
?>
