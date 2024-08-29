# Exercicio 50

-   Crie um array associativo com nomes e idades;

-   Imprima estes dados em uma tabela de html;

-   Dica, utilize as tags do elemento table;

<br><br>

# Resumo do Código

Esse código PHP cria uma tabela HTML para exibir uma lista de nomes e idades.

## O que o código faz

1. **Criação do Array**

    - Primeiro, criei um array associativo chamado `$pessoa`, onde coloquei alguns nomes como chave (tipo `'Rafael'`, `'Thais'`, e `'Gabriel'`) e as respectivas idades como valor (`33`, `31`, e `26`).

2. **Montando a Tabela HTML**

    - Depois, comecei a criar uma tabela em HTML com a tag `<table>`, usando `border="1"` para adicionar bordas entre as células.

3. **Cabeçalho da Tabela**

    - Adicionei um cabeçalho à tabela com `<tr>` para criar uma linha, e `<th>` para definir as colunas "Nomes" e "Idades".

4. **Preenchendo a Tabela com Dados**

    - Usei um loop `foreach` para passar por cada item do array `$pessoa`. Em cada volta do loop:
        - Exibo o nome na primeira coluna com `<td>`.
        - Exibo a idade na segunda coluna, também com `<td>`.

5. **Finalizando**
    - O loop continua até que todos os nomes e idades estejam na tabela, com cada linha `<tr>` mostrando um nome e a idade correspondente.

## Resultado Final

O resultado é uma tabela HTML simples e organizada que exibe todos os nomes e idades de maneira clara.

---
