<?php

  $variedades = ["pneu", 10, 12.5, "abaxaxi", "vscode", true, "carro", 5, "Rafael", 21.7, "luz", false];

  $x = count($variedades); //Faz a contagem de itens !!!

  $y = 0; //inicio da contagem !!

  // leitura: Enquanto Y for menor que X, continue contando.
  while($y < $x){

  // Fazer verificação se a array é string(exemplo) e colocar a contagem Y que é igual a 0 !!!
  if(is_string($variedades[$y])){
   
  // Imprima na tela a array com a contagem, igual colocado na condição acima !!  
    echo $variedades[$y] . "<br>";
  
  }

  // Após fechar as chaves da condição, fazer a contagem de um em um conforme abaixo !!!
    $y++;
  }