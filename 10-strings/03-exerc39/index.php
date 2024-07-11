<?php

    // Define um array associativo com peças de carro e seus respectivos preços
    $pecasDeCarro = [
        'porta' => 100,
        'maçaneta' => 5,
        'motor' => 2000,
        'retrovisor' => 8,
    ];

    // Função para filtrar itens caros do array de peças
    function itensCaros($pecasDeCarro){
        
        // Inicializa um array vazio para armazenar as peças mais caras
        $pecasMaisCaras = [];

        // Loop através do array de peças de carro
        foreach($pecasDeCarro as $item => $preco){

            // Se o preço da peça for maior que 10, adiciona a peça ao array de peças mais caras
            if($preco > 10){
                array_push($pecasMaisCaras, $item);
            }
        }

        // Retorna o array de peças mais caras
        return $pecasMaisCaras;
    }

    // Chama a função itensCaros e armazena o resultado em um novo array
    $novoArray = itensCaros($pecasDeCarro);

    // Imprime o novo array com as peças mais caras
    print_r($novoArray);

?>
