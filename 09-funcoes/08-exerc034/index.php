<?php

    function verificarValor($num){

        if($num % 2 === 0){

            echo "O número $num: é par!<br>";

        } else {

            echo "O número $num: é impar!<br>";

        }


    }

    verificarValor(1);
    verificarValor(9);
    verificarValor(10);
    verificarValor(11);