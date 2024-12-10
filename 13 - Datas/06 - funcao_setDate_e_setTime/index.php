<?php

  $data = new DateTime();
  print_r($data) . "<br>";

  
  // Abaixo usando setDate e setTime:
$data->setDate(1991, 04, 21);
print_r($data) . "<br>";

$data->setTime(18, 30, 25);
print_r($data) . "<br>";

echo $data->format("d/m/y") . "<br>";