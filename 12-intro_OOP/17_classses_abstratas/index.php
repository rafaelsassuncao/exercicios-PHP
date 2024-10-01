<?php

  abstract class Teste {
    public static function testantoClasse() {
    echo "Este método é de uma classe abstrata <br>";
  }
    abstract public function testeAbs();
  }

  // $t = new Teste;

Teste::testantoClasse();

class Nova extends Teste {
  public function testeAbs() {
    echo "Teste método abstrato <br>";
  }
}