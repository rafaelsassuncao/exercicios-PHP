# Exercicio 051

-   Crie um array associativo com a chaves com valor de nomes, e valores com uma pontuação;

-   Ordene os dados do maior para o menor;

-   Exiba uma lista, simulando um ranking, em HTML;

# Como Funciona o Ranking de Pontuações

Este código em PHP cria um ranking de pontuações de diferentes jogadores. Aqui está um resumo de como ele funciona:

1. **Criação do Array Associativo**:

    - O código começa criando um array associativo chamado `$ranking`. Nesse array, cada chave representa o nome de um jogador, e cada valor é a pontuação correspondente desse jogador.

2. **Ordenação do Ranking**:

    - Após criar o array, o código utiliza a função `arsort()` para ordenar o array em ordem decrescente, com base nas pontuações. Isso garante que o jogador com a maior pontuação apareça primeiro no ranking.

3. **Exibição do Ranking**:
    - Para exibir o ranking, o código utiliza uma estrutura `foreach` que percorre o array ordenado. Durante essa iteração, ele imprime os nomes dos jogadores junto com suas respectivas pontuações dentro de uma lista ordenada (`<ol>`).

Este código é uma maneira simples de criar e exibir um ranking de pontuações em um site ou aplicação web.
