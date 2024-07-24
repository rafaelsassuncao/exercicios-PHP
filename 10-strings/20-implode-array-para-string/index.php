<?php

  $arr = [ "Maça", "Pera", "Mamão", "Batata"];

  $str = implode(", ", $arr);

  echo "$str <br>";

  $arr2 = ["Avião", "Tanque", "Jipe", "Metralhadora"];

  $str = implode(" <-> ", $arr2);

  echo "$str <br>"; 