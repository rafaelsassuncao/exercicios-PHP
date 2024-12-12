<?php

    $carro = [
        'marca' => 'Fiat',
        'rodas' => 4, 
        'portas' => 2,
        'teto_solar' => true,
        'blindado' => false,
        'velocidade_max' => 300
    ];

    echo "<br>";

    print_r($carro);

    $marca = $carro['marca'];
    $velocidade_maxima = $carro['velocidade_max'];

    echo "<br>";
    echo "<br>";
    echo "O carro é da marcas $marca e atinge a velocidade maxima de $velocidade_maxima km/h.";