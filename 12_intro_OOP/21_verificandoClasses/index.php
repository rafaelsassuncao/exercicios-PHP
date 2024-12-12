<?php

  class Humano {
    public $idade;
    public $nome;
    public $profissão;

    public function falar(){}

    public function andar(){}
  }

  // Utilizando o class_exist
  if(class_exists("Humano")){
    echo "A classe existe <br>";
  } else {
    echo "A classe não existe <br>";
  }

  if(class_exists("Cachorro")){
    echo "A classe existe <br>";
  } else {
    echo "A classe não existe <br>";
  }

// Utilizando o get_class_vars
print_r(get_class_vars("Humano"));

  // Utilizando o get_class_methods
  print_r(get_class_methods("Humano"));

  