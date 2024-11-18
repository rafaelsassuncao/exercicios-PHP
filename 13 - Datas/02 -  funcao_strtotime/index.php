<?php

  $cincodias = strtotime("5 days");

  $dezdias = strtotime("10 days");

  $doismeses = strtotime("2 months");

  $dozeanos = strtotime("12 years");


  $dataAtualMais5 = date('d/m/y' , $cincodias);
  echo $dataAtualMais5 . "<br>";

  $dataAtualMais10 = date('d/m/y' , $dezdias);
  echo $dataAtualMais10 . "<br>";

  $dataAtualMaisDoisMeses = date('d/m/y', $doismeses);
  echo $dataAtualMaisDoisMeses . "<br>";

  $dataAtualMais12Anos = date('d/m/y' , $dozeanos);
  echo $dataAtualMais12Anos . "<br>";
