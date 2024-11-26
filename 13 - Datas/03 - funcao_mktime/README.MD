# Função mktime

-   A função **mktime** recebe em seus parâmetros: **hora, minuto, segundo, mês, dia e ano**;

-   Assim podemos criar uma data a partir desta informação;

-   Exemplo:

$date = mktime(01,18,00,03,12,2000);
echo date('d/m/y', $date);
