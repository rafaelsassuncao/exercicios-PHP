<?php

$peso = 79.200;

$pesoLimite = 80;

$msg1 = "Você esta acima do peso";
$msg2 = "Peso está dentro do limite";

if($peso > $pesoLimite){

    echo $msg1;

}else {

    echo $msg2;

}