<?php

  function defineCorCarro($cor = "Vermelha") {

    return "A cor do carro é: $cor. <br>";
    
  }

  $carroVermelho = defineCorCarro();
  echo $carroVermelho . "<br>";

  $carroAzul = defineCorCarro("Azul");
  echo $carroAzul . "<br>";

  echo defineCorCarro("Verde");

  echo defineCorCarro();