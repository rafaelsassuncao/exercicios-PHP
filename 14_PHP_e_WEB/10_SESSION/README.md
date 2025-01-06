# Sobre as sessions

● Com session podemos criar uma variável que persiste em diferente páginas e também perdura por várias visitas ao mesmo site;

● A session utiliza recursos de cookies para seu funcionamento, e se orecurso estiver desabilitado propaga a sessão via URL;

● Sessions são utilizadas para: autenticação, carrinho de compras e tudo o que precisa persistir de página em página;

● Acaba sendo o recurso mais utilizado, comparando o com o cookie;

# Iniciando com sessions

● Para iniciar a utilizar session precisamos utilizar a função session_start;

● Esta função vai carregar os dados existentes e também permitir salvar novos dados;

● Todas as variáveis salvas em session ficam em $_SESSION;

● Podemos salvar utilizando uma chave e valor, como em arrays;

● Para deletar todos os dados da session utilizamos 
session_destroy;