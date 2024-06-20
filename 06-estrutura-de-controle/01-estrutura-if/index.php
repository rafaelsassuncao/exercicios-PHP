<?php

  // Condição verdadeira
  if(5 > 2){
    echo "Deu certo! Entrou no if <br>";
  }

  // Condição falsa
  if(2 >= 5){
    echo "Não vai entrar no if! <br>";
  }

  // Utilizar operador lógico
  if(10 === 10 && 9 > 5){
    echo "Deu certo! Entrou no if 2 <br>";
  }

  // Variáveis
  $alfa = 10;
  $betta = 5;
  $charle = "Deu certo! Entrou no if 3 <br>";

  if($alfa >= $betta){
    echo $charle;
  }