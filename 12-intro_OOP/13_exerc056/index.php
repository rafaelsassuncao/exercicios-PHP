<?php

  class Humano {

    public $idade = 33;
    public $olhos = 2;

    public function falar() {

      echo "E ai, tudo bem? <br>";

    }

  }

  class Professor extends Humano {

    public $materia = "Matemática";

    public function emAula(){
      echo "O professor esta dando aula de $this->materia <br>";
    }

  }


$rafael = new Humano;

echo $rafael->idade . "<br>";
echo $rafael->olhos . "<br>";
$rafael->falar();

$thais = new Professor;

echo $thais->idade = 29 . "<br>";
echo $thais->olhos . "<br>";
echo $thais->materia. "<br>";
$thais->falar();
$thais->emAula();

