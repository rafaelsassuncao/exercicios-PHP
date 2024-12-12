<?php

    function soma($n1, $n2) {


        return $n1 + $n2;

    }

    echo soma(4, 4) . "<br>";

    $x = soma(2, 4);

    echo $x . "<br>";

    $y = soma($x, 19);

    echo $y . "<br>";


    function testandoRetorno() {

        return "Testando";

    }

    $z = testandoRetorno();

    echo $z . "<br>";