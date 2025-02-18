# Selecionando dados com prepared

● Para selecionar dados com prepared statements devemos resgatar os
dados com o método fetch_all;

● A sequência será: prepare => bind_param => execute => get_result =>
fetch_all;

● E depois devemos fechar a conexão;