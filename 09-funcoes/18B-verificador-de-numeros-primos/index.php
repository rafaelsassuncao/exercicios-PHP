<?php

  function isPrime($n){
    if($n < 2) {
      return false;
    }
    
    for($i = 2; $i <= sqrt($n); $i++){
      if($n % $i == 0){
        return false;
      }
    }
    return true;
  }

 $resultado = isPrime(2);

 echo $resultado;