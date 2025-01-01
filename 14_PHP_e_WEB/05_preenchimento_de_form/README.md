# Preenchimento de formulário

● Podemos preencher o formulário com dados que vieram da requisição;
● Isso acontece bastante em resultados de busca ou edições de registros;
● Podemos fazer uma checagem de se o dado foi enviado e recebido
para a página, e utilizar o echo para exibir no atributo value do input;

● Exemplo:
<input type=”text” value=”<?php echo $nome; ?>”>
