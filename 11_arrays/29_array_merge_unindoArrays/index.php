<?php

  $arr1 = [1, 2, 3];
  $arr2 = [10, 20, 30];
  $arr3 = [2.1, 44.5, 43.3];
  $arr4 = ["asd", "as", "a"];

  // A função array_merge() une os quatro arrays em um único array
  $unindoArrays = array_merge($arr1, $arr2, $arr3, $arr4);
  
  print_r($unindoArrays);
  
  echo "<br>";
