<?php

    function teste($a = "teste") {

        return "O valor de A é: $a <br>";


     }

     echo teste();
     echo teste("asd");

     function testando($b, $a = "x") {

        return "O valor de A é: $a e de B é $b <br>";

     }


     echo testando("1");
     echo testando("1", "2");


    
