# Exercicio 46

-   Crie um array multidimensional com 3 arrays e 4 elementos cada;

-   Imprima todos os elementos de cada um dos arrays;

-   Imprima tambem quando esta mudando de array;

# Percorrendo Arrays Multidimensionais em PHP

Neste arquivo, estou praticando como percorrer arrays multidimensionais em PHP.

-   Primeiro, criei um array chamado $arrMulti. Ele é chamado de multidimensional porque contém outros arrays dentro dele. No caso, cada um dos três arrays internos tem quatro números.

-   Em seguida, utilizei um loop for para percorrer o array externo $arrMulti. O loop começa com uma variável $i = 0 e continua até que $i seja menor que o número total de arrays internos. A cada iteração, $i é incrementado por 1, o que permite acessar cada um dos arrays internos, um de cada vez.

-   Dentro desse loop externo, imprimi uma mensagem para mostrar qual array interno está sendo acessado no momento. Por exemplo, se $i for 0, o código vai mostrar "Imprimindo array externo: 1".

-   Para percorrer os elementos dentro de cada array interno, utilizei outro loop for. Esse segundo loop funciona de maneira semelhante ao primeiro, mas desta vez ele percorre cada elemento dentro do array interno atual. Aqui, uma variável $j = 0 começa no primeiro elemento e vai até o último índice do array interno.

-   Finalmente, cada número dentro do array interno é impresso na tela. Por exemplo, se $i = 0 e $j = 0, o código vai imprimir o primeiro elemento do primeiro array, que é 4.

Esse código me ajudou a entender como percorrer arrays multidimensionais em PHP, usando loops aninhados para acessar e manipular dados em estruturas de arrays mais complexas.
