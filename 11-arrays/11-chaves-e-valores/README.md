# README - Passo a Passo

## O que este código faz?

Este código é um exemplo simples de como usar `array_keys()` e `array_values()` no PHP para trabalhar com arrays associativos.

## Como o código funciona?

### 1. Criando o Array Associativo

Primeiro, eu criei um array chamado `$carro` que contém diferentes detalhes sobre um carro. Cada item tem uma chave (como `'marca'`) e um valor associado (como `'BMW'`).

### 2. Pegando as Chaves

Usei a função `array_keys()` para pegar todas as chaves do array `$carro`. O resultado é armazenado na variável `$chaves`.
Depois, utilizei `print_r($chaves)` para imprimir essas chaves e ver como elas ficam.

### 3. Quebra de Linha

Adicionei um `echo '<br>';` para colocar uma quebra de linha na saída e separar visualmente as informações das chaves e dos valores.

### 4. Pegando os Valores

Usei a função `array_values()` para pegar todos os valores do array `$carro`. Esses valores são armazenados na variável `$valores`.
Da mesma forma, usei `print_r($valores)` para ver os valores na tela.

### 5. Finalizando

Adicionei mais uma quebra de linha com `echo '<br>';` para deixar a saída mais organizada.

## Conclusão

Essas funções são bem úteis quando você precisa separar as chaves e os valores de um array associativo. Isso pode ser usado para várias coisas, como processar ou exibir dados de forma personalizada. Este README foi criado para me ajudar a lembrar como usar `array_keys()` e `array_values()` em PHP.
