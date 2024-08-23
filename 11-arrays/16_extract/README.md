# Uso da função `extract` em PHP

Neste exemplo, usamos a função `extract`, que é uma ferramenta útil em PHP para criar variáveis a partir das chaves de um array associativo. Abaixo, explico passo a passo como a função foi aplicada no código.

## Descrição do Código

1. Primeiro, criei um array associativo `$arr` com as chaves `cor`, `forma`, e `material`. Cada chave possui um valor correspondente.

2. Em seguida, utilizei a função `extract($arr);`. Isso faz com que cada chave do array se transforme em uma variável com o mesmo nome da chave, e o valor da variável seja o valor correspondente à chave no array.

3. Após o uso do `extract`, as variáveis `$cor`, `$forma`, e `$material` foram criadas e utilizadas no `echo` para exibir seus valores.

4. No próximo bloco de código, criei uma variável `$nome` com o valor "Thais".

5. Em seguida, criei outro array associativo `$pessoa` com as chaves `nome` e `idade`.

6. O valor da variável `$nome` foi exibido antes de usar o `extract` no array `$pessoa`.

7. A função `extract($pessoa);` foi chamada, criando as variáveis `$nome` e `$idade` com base nas chaves do array `$pessoa`.

8. Após o `extract`, a variável `$nome` foi sobrescrita com o valor "Rafael", que é o valor correspondente à chave `nome` no array `$pessoa`. A variável `$idade` também foi criada com o valor `33`.

9. Por fim, os valores das variáveis `$nome` e `$idade` foram exibidos usando `echo`.

## Observações

-   A função `extract` é muito útil, mas deve ser usada com cuidado. Se você já tiver variáveis definidas com o mesmo nome das chaves do array, elas serão sobrescritas, como demonstrado no exemplo com a variável `$nome`.

-   É importante garantir que o uso de `extract` não cause conflitos de variáveis, especialmente em códigos mais complexos.

Este exemplo me ajudou a entender melhor como manipular arrays associativos e a importância de ser cauteloso ao trabalhar com variáveis e seus nomes.
