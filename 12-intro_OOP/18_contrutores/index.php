<?php

  class Car {
    public $portas;
    public $cor;
    public $marca;
  
  function __construct($portas, $cor, $marca){
    $this->portas = $portas;
    $this->cor = $cor;
    $this->marca = $marca; 
  }
}

$ferrari = new Car(4, "Vermelha", "Ferrari");
echo "O carro da $ferrari->marca e tem a $ferrari->cor <br>";

$BMW = new Car(4, "Branca", "BMW");
echo "O carro da $BMW->marca e tem a $BMW->cor <br>";