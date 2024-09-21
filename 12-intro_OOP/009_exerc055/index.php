<?php

  class Carro {

    public $cor;
    public $tetoSolar;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($vel){
      $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima(){
      echo "A velocidade máxima do carro é: $this->velocidadeMaxima km/h. <br>";
    }
    
  }

  $peugeot = new Carro;
  $peugeot->cor = "Branco";
  $peugeot->tetoSolar = true;

  // Utilizando o método:

  $peugeot->setVelocidadeMaxima(240);
  $peugeot->getVelocidadeMaxima();


$onix = new Carro;

$onix->setVelocidadeMaxima(150);
$onix->getVelocidadeMaxima();