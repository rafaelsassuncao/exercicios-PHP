<?php

  class Cachorro{
    public $cor;
    public $raca;
    public $tamanho;

    function __construct($cor, $raca, $tamanho){
      $this->cor = $cor;
      $this->raca = $raca;
      $this->tamanho = $tamanho;
    }
    public function exibirAnimal(){
      echo "O cachorro da raça $this->raca, nasceu na cor $this->cor e vai ser de porte $this->tamanho ! <br><br>";
    }
  }

  $fila = new Cachorro("tigrado", "Fila Brasileiro", "grande");
  $fila->exibirAnimal();
  $viraLata = new Cachorro("caramelo", "vira lata", "médio");
  $viraLata->exibirAnimal();
  
  