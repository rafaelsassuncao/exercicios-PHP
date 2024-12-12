<?php

    $a = true;

    if(is_bool($a)){
        echo "É um boleano 1 <br>";
    }

    if(is_bool(0)){
        echo "É um boleano 2 <br>";
    }

    if(is_bool(false)){
        echo "É um boleano 3 <br>";
    }

    if(0.0 == false){
        echo "0 é considerado falso! <br>";
    }