# Upload de arquivos

● Para enviar arquivos ao servidor vamos precisar mudar o enctype do
formulário para: multipart/form-data;
● Também será necessário um input de tipo file;
● O tamanho do arquivo pode exaurir a memória do servidor;
● Depois do envio, todos os dados da imagem estarão em $_FILES;