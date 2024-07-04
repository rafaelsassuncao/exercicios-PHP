<?php

    function velocidadeMaxima($vel){

            if(is_int($vel)){
            echo "O carro atinge a velocidade máxima de: $vel km/h <br>";
            } else {
                echo "Por favor, passe um número inteiro <br><br>";
            }    
    }

    velocidadeMaxima(200);
    velocidadeMaxima(300);
    velocidadeMaxima(400);

    // Não pode
    // velocidadeMaxima() deixar vazio ou com parametro inexistente;

    echo "Teste continuando <br>";

    $velocidade = 115;

    velocidadeMaxima($velocidade);

    // Exemplo de parametro inexistente, o PHP ignora
    // velocidadeMaxima(250, "teste");

    velocidadeMaxima("teste");


    function descreverAnimal($nome, $raca){

        echo "Se chama $nome é  da raça $raca <br>";

    }

    descreverAnimal("Têtê", "Caramelo");
    descreverAnimal("Cururu", "Vira Lata");
    descreverAnimal("Lisa", "Chow Chow");





