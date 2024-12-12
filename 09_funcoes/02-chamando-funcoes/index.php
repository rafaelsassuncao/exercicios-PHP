<?php

// Abaixo como é montada a estrutura básica de uma função no php. É sempre importante que a função seja criada sempre após a tag <?php !!!
  function soma(){

    $a = 5;
    $b = 10;

    // Aqui mostra o que vai ser exibido quando eu chamar/invocar a função mais abaixo!!!
    echo $a + $b . "<br>";

  }


  // Chamando a função acima / invocando função !!!
  soma();
  soma();

  // Função do PHP para deixar todas as letras maiusculas.
  echo strtoupper("testando funcao");
  
  