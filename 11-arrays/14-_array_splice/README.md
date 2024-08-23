# Manipulação de Arrays em PHP

## Descrição

Este script demonstra como resgatar e remover elementos de um array em PHP utilizando a função `array_splice()`. A função `array_splice()` é utilizada para remover e/ou substituir elementos em um array.

## Funcionamento

1. **Criação do Array**: O array `$arr` é inicializado com os valores `[1, 2, 3, 4, 5, 6]`.
2. **Remoção de Elementos**: A função `array_splice()` é chamada com três parâmetros:
    - O array original (`$arr`).
    - O índice a partir do qual a remoção deve ocorrer (1, que corresponde ao segundo elemento).
    - O número de elementos a serem removidos (2, que corresponde aos elementos 2 e 3).
3. **Exibição dos Resultados**:
    - O array resultante após a remoção é exibido.
    - Os elementos removidos são armazenados na variável `$removidos` e também são exibidos.

## Saída Esperada

Ao executar o código, a saída será:

-   Array original após a remoção: `[1, 4, 5, 6]`
-   Elementos removidos: `[2, 3]`

## Conclusão

Este exemplo ilustra como manipular arrays em PHP, especificamente como remover elementos de um array e como recuperar os elementos removidos.
