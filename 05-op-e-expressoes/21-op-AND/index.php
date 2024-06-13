<?php

// false e true = false
  if(5 > 10 && 10 > 5) {
    echo "Entrou no if 1<br>";
  }

// true e true = true
  if(50 > 10 && 10 > 5) {
    echo "Entrou no if 2<br>";
  }

  // true e false = false
  if(50 > 10 && 10 > 500) {
    echo "Entrou no if 3<br>";
  }

  // false e false = false
  if(50 > 100 && 10 > 500) {
    echo "Entrou no if 4<br>";
  }

  $a = 10;
  $b = 5;
  $c = 12;
  $d = 12;

  if($a > $b && $c == $d){
    echo "Entrou no if 5<br>";
  }

  if($b <= $a && $c >= $d){
    echo "Entrou no if 6<br>";
  }

  if($b === $a && $c > $d){
    echo "Entrou no if 7<br>";
  }

  if(($a > $b && $c == $d) && $a > $b){
    echo "Entrou no if 8<br>";
  }

  if($b <= $a && $c >= $d && $c === $a){
    echo "Entrou no if 9<br>";
  }

