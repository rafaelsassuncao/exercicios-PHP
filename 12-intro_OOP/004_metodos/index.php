<?php

  class Pessoa {

    function falar(){
      echo "Olá, eu sou um objeto! <br>";
    }

    function somar($x, $y){
      echo $x + $y . "<br>";
    }

  }

  $rafael = new Pessoa;
  $rafael->falar();
  $rafael->falar();

  $thais = new Pessoa;

  $thais->falar()  

  $rafael->somar(10, 10);
  $thais->somar(2, 3);
  

  