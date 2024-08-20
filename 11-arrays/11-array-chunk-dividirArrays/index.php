<?php

$arr = range(1, 20);

print_r(array_chunk($arr, 4));
echo '<br><br>';

$arrayS = array_chunk($arr, 10);

print_r($arrayS);
echo "<br><br>";

print_r($arrayS[1]);
echo '<br>';