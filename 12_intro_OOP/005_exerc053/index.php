<?php

  class Cachorro {

    function latir(){
      echo "Esta latindo!!! <br>";
    }

    function andar($metros){
      echo "Andou $metros metros<br>";
    }

  }


  $caramelo = new Cachorro;
  $tete = new Cachorro;
  $pantera = new Cachorro;

  $caramelo->latir();
  $tete->latir();
  $pantera->latir();

  $caramelo->andar(100);
  $tete->andar(50);
  $pantera->andar(2000);