# Uso da função `compact` em PHP

Neste exemplo, explorei a função `compact` em PHP, que permite criar um array associativo a partir de variáveis já existentes no código. A seguir, explico como a função foi utilizada.

## Descrição do Código

1. Primeiro, criei quatro variáveis:

    - `$marca` com o valor `"BMW"`.
    - `$motor` com o valor `"3.0"`.
    - `$tetoSolar` com o valor `true` (booleano).
    - `$portas` com o valor `4`.

2. Em seguida, utilizei a função `compact("marca", "motor", "tetoSolar", "portas");`. Essa função pega os nomes das variáveis passadas como strings e cria um array associativo, onde os nomes das variáveis se tornam as chaves e os valores das variáveis se tornam os valores do array.

3. O resultado da função `compact` foi armazenado na variável `$carros`, que se tornou um array associativo com as chaves `marca`, `motor`, `tetoSolar`, e `portas`, cada uma contendo o valor correspondente às variáveis originais.

4. Finalmente, usei a função `print_r($carros);` para exibir a estrutura do array `$carros` de forma legível.

## Exemplo de Saída

A execução do código acima irá produzir a seguinte saída:

```php
Array
(
    [marca] => BMW
    [motor] => 3.0
    [tetoSolar] => 1
    [portas] => 4
)


## Observações

A função `compact` é muito útil para agrupar várias variáveis em um único array, especialmente quando você precisa passar dados para uma função ou manipular um conjunto de variáveis de forma organizada.

Note que o valor booleano `true` para `tetoSolar` foi convertido para `1` no array, pois o `print_r` exibe valores booleanos como `1` (true) ou vazio (false).

Este exemplo me ajudou a entender como a função `compact` pode simplificar a criação de arrays associativos a partir de variáveis existentes no código.
```
