<?php

  $velocidadeCarro = 35;

  $velocidadeMaxima = 40;

  if($velocidadeCarro < $velocidadeMaxima){

    echo "Motorista esta na velocidade correta! <br>";

    } else if($velocidadeCarro == $velocidadeMaxima){

      echo "Cuidado! Você esta no limite velocidade máxima! <br>";

      } else{
        echo "Você excedeu a velocidade máxima de 40km/h, multado(a)!";
      }