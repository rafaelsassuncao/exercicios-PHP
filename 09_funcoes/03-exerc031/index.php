<?php

$produtos = ["Carro", "Avião", "Lancha", "Moto"];

$listanova = implode(", ", $produtos);

echo ($listanova);

// a escolha entre print_r e echo depende do que você deseja exibir: echo para strings simples ou variáveis, e print_r para estruturas mais complexas como arrays e objetos, onde é necessário ver detalhes internos para fins de depuração.