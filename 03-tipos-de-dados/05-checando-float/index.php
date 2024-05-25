<?php

    $a = "teste";
    $b = 12.8;

    if(is_float($a)) {
        echo "Isso é float 1! <br>";
    }

    
    if(is_float($b)) {
        echo "Isso é float 2! <br>";
    }
    
    if(is_float(6565.63)) {
        echo "Isso é float 3! <br>";
    }

    if(is_float("teste")) {
        echo "Isso é float 4! <br>";
    }