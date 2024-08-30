# Explicação do Código em PHP Utilizando `array_reduce`

## Visão Geral

Nesse exemplo, vou explicar como utilizei a função `array_reduce` no PHP. Essa função é usada para aplicar uma operação em todos os elementos de um array, acumulando os resultados de acordo com a lógica que eu definir.

## Estrutura do Código

### 1. Definição de um Array

Primeiro, eu criei um array com vários números inteiros. Esse array vai servir como entrada para as operações que vou fazer.

### 2. Funções de Operação

No código, defini duas funções:

-   **Função de Soma**: Essa função recebe dois números como argumentos e retorna a soma deles.
-   **Função de Subtração**: Essa função também recebe dois números, mas retorna a subtração do segundo número em relação ao primeiro.

Essas funções são simples e mostram operações matemáticas básicas que podem ser feitas com os elementos do array.

### 3. Utilizando `array_reduce`

Depois, usei a função `array_reduce` para aplicar as operações que defini no array de números.

-   **Primeira Operação (Soma)**: Usei o `array_reduce` para somar todos os elementos do array. Passei a função de soma como argumento, e o resultado final da soma de todos os elementos do array foi guardado em uma variável.
-   **Segunda Operação (Subtração)**: De forma parecida, usei o `array_reduce` para subtrair os elementos do array, usando a função de subtração que defini antes.

### 4. Exibição dos Resultados

Por último, mostrei os resultados das operações (soma e subtração) na tela, mostrando o valor final acumulado depois de aplicar a função em todos os elementos do array.

## Conclusão

Aprendi que o uso da função `array_reduce` é uma maneira poderosa de realizar operações acumulativas em arrays. Ao definir uma função específica para a operação desejada (como soma ou subtração), o `array_reduce` aplica essa função a cada elemento do array, acumulando o resultado ao longo do processo.
