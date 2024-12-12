<?php

// Define um array com alguns elementos
$arr = ["Maça", "Pera", "Mamão", "Batata"];

// Usa a função implode para juntar os elementos do array $arr em uma única string
// Os elementos serão separados por ", "
$str = implode(", ", $arr);

// Imprime a string resultante
echo "$str <br>";

// Define outro array com alguns elementos
$arr2 = ["Avião", "Tanque", "Jipe", "Metralhadora"];

// Usa a função implode para juntar os elementos do array $arr2 em uma única string
// Os elementos serão separados por " <-> "
$str = implode(" <-> ", $arr2);

// Imprime a string resultante
echo "$str <br>";

?>
