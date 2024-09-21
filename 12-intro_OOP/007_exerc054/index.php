<?php

  class Pessoa {

    public $nome;
    public $idade;

    function andar($metros){
      echo "Andou praticamente $metros mêtros!!! <br>";
    }
  }

  $rafael = new Pessoa;
  
  $rafael->nome = "Rafael";
  $rafael->idade = 33;

  echo "O nome dele(a) é $rafael->nome e ele tem $rafael->idade anos. <br> ";
  // Usando o método
  $rafael->andar(30);

  // novo objeto
  $thaisNickele = new Pessoa;
  $thaisNickele->nome = "Thais Nickele";
  $thaisNickele->idade = 29;
  echo "O nome dele(a) é $thaisNickele->nome e a sua idade é $thaisNickele->idade anos. <br> ";
  // Usando o método
  $thaisNickele->andar(500);


