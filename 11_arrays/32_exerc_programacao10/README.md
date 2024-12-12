# Encontrar o Maior Elemento

1. Escreva uma função chamada **maiorElemento** que recebe um array de números como parâmetro.

2. A função deve retornar o maior elemento presente no array.

3. Considere que o array sempre terá pelo menos um elemento.

---

## Descrição da Implementação:

-   A função **maiorElemento** inicia atribuindo o valor do primeiro elemento do array à variável `$maior`, assumindo que ele é o maior até o momento.

-   Em seguida, a função percorre o array utilizando um loop `foreach`, comparando cada elemento com o valor armazenado em `$maior`.

-   Se algum elemento for maior que o valor atual de `$maior`, ele substitui o valor de `$maior`.

-   Após percorrer todos os elementos do array, a função retorna o maior valor encontrado.

-   No exemplo de execução, o array `[1, 75, 35, 125, 758, 987, 456]` foi utilizado, e o maior valor retornado foi **987**.
