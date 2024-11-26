<?php

$dataNascimento = mktime(18,30,42,04,21,1991);
echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date('d/m/Y', $dataNascimento);
echo $dataNascimentoFormatada . "<br>";

$dataEspecifica = mktime(10,20,11,04,28,2041);
$dataFuturaFormatada = date('d/m/Y', $dataEspecifica);
echo $dataFuturaFormatada . "<br>";