<?php

  $arr = [
    'Rafael' => 33,
    'Thais' => 31,
    'Rute' => 65,
    'Gabriel' => 27,
  ];

  asort($arr);
  
  print_r($arr);
  echo '<br><br>';


  $arr2 = [
    'Rafael' => 33,
    'Thais' => 31,
    'Rute' => 65,
    'Gabriel' => 27,
  ];

  arsort($arr2);
  
  print_r($arr2);
  echo '<br><br>';

  $arr3 = [
    'Rafael' => 33,
    'Thais' => 31,
    'Rute' => 65,
    'Gabriel' => 27,
  ];

  ksort($arr3);
  
  print_r($arr3);
  echo '<br><br>';




