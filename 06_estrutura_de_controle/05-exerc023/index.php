<?php

    $idade1 = 33;
    $idade2 = 16;
    $idade3 = 18;

    $maiorIdade = 18;

    $msg = "É maior de idade";
    $msg2 = "Não é maior de idade";
    
    // Primeira verificação
    if($idade1 >= $maiorIdade){  
        
        echo "1 - ";
        echo $msg . "<br>"; 
    
    } else {
        echo "1 - ";
        echo $msg2 . "<br>";

    }

    
    // Segunda verificação
    if($idade2 >= $maiorIdade){  

        echo "2 - ";
        echo $msg . "<br>"; 
    
    } else {
        echo "2 - ";
        echo $msg2 . "<br>";

    }

    
    // Terceira verificação
    if($idade3 >= $maiorIdade){  
        
        echo "3 - ";
        echo $msg . "<br>"; 
    
    } else {
        echo "3 - ";
        echo $msg2 . "<br>";

    }
