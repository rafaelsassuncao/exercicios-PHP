# Resumo do Código PHP: Funções `sort` e `rsort`

Nesta aula, aprendemos a usar as funções `sort` e `rsort` em PHP para ordenar arrays. Aqui está um resumo rápido de como elas funcionam e os resultados que obtivemos.

## Funções PHP

### `sort()`

-   **O que faz**: Ordena um array em ordem crescente, do menor para o maior.
-   **Quando usar**: Utilize `sort()` quando precisar que os elementos do array fiquem em ordem crescente.

### `rsort()`

-   **O que faz**: Ordena um array em ordem decrescente, do maior para o menor.
-   **Quando usar**: Utilize `rsort()` quando precisar que os elementos do array fiquem em ordem decrescente.

## Testes e Resultados

-   **Números Inteiros**:

    -   **Original**: `[2, 1, 344, 32, 123, 65, 38, 999, 12, 4]`
    -   **Ordem Crescente com `sort()`**: `[1, 2, 4, 12, 32, 38, 65, 123, 344, 999]`
    -   **Ordem Decrescente com `rsort()`**: `[999, 344, 123, 65, 38, 32, 12, 4, 2, 1]`

-   **Strings**:
    -   **Original**: `['Thais', 'Rafael', 'Amora', 'Pipoca']`
    -   **Ordem Alfabética Crescente com `sort()`**: `['Amora', 'Pipoca', 'Rafael', 'Thais']`
    -   **Ordem Alfabética Decrescente com `rsort()`**: `['Thais', 'Rafael', 'Pipoca', 'Amora']`

## Dicas

-   Use `sort()` para organizar dados em ordem crescente.
-   Use `rsort()` para organizar dados em ordem decrescente.

Se tiver dúvidas ou precisar de mais informações, deixe um comentário!
