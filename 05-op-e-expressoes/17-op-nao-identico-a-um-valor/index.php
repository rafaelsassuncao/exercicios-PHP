<?php

  $a = 1;
  $b = "1";

  if($a != $b){
    echo "'A' é diferente de 'B' (1)<br>";
  }
  
  if($a !== $b){
    echo "'A' não é idêntico ao 'B' (2)<br>";
  }
  
  if(1 !== 2){
    echo "'1' não é idêntico ao '2' (3)<br>";
  }
  
  if(1 !== "1"){
    echo "'1' tipo inteiro, não é idêntico ao '1' tipo string (4)<br>";
  }
  
  if([] !== "abc"){
    echo "'[]' não é idêntico ao 'abc' (5)<br>";
  }