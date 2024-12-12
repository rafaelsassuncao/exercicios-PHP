<?php

  interface Caracteristicas {
    const nome = "Rafael";
    public function falar();
  }

  class Humano implements Caracteristicas {
    public $idade = 33;
    public function falar(){
      echo "Olá, mundo! <br>"; 
    }
    public function dizerNome(){
      echo "Meu nome é " . self::nome . "<br>";
    }
  }

  $rafael = new Humano;

  $rafael->falar();
  $rafael->dizerNome();