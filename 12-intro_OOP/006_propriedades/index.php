<?php

  class Car {

    public $rodas = 4;
    public $aro = 20;
    public $cor = "Vermelha";

    function ligar(){
      echo "Vruuuummm!!! <br>";
    }
  }

  $ferrari = new Car;
  echo $ferrari->rodas . "<br>";
  echo $ferrari->aro . "<br>";
  echo $ferrari->cor . "<br>";
  echo $ferrari->cor = "Azul <br>";
  
  $ferrari->ligar();