<?php

  $dataA = new DateTime();
  $dataB = new DateTIme();

  $dataB->setDate(1991, 04, 21);

  print_r($dataA);
  echo "<br>";

  print_r($dataB);
  echo "<br>";

  $diferenca = $dataA->diff($dataB);
  print_r($diferenca);
  echo "<br>";

  echo $diferenca->format("%a days");
  echo "<br>";