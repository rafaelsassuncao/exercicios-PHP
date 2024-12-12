<?php 

    function sumDigits($num){

        $sum = 0;

    while ($num > 0) {

        $digit = $num % 10;
        $sum += $digit;

        $num = floor ($num / 10);
 }

    return $sum;
}

$soma = sumDigits(123);

echo $soma;