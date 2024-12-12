<?php

  class Calculadora {

    // Método para somar dois números:
    public function somar($a, $b){
      return $a + $b;
    }
    // Método para subtrair o segundo número do primeiro:
    public function subtrair($a, $b){
      return $a - $b;
    }

  // Método para multiplicar dois números:
    public function multiplicar($a, $b){
      return $a * $b;
    }

    // // Método para dividir o primeiro número pelo segundo:
    public function dividir($a, $b){
      if ($b == 0){
          return "Erro: Divisão por zero não é permitida.";
      }
      return $a / $b;
  }
}


$calculadora = new Calculadora();

echo $calculadora->somar(10, 5) . "\n";       // Saída: 15
echo $calculadora->subtrair(10, 5) . "\n";    // Saída: 5
echo $calculadora->multiplicar(10, 5) . "\n"; // Saída: 50
echo $calculadora->dividir(10, 5) . "\n";     // Saída: 2
echo $calculadora->dividir(10, 0) . "\n";     // Saída: Erro: Divisão por zero não é permitida.