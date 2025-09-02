# MySQL / MariaDB

O MariaDB é um sistema de gestão de bases de dados relacionais (RDBMS) de código aberto, gratuito e de código fonte aberto, criado pelos desenvolvedores originais do MySQL após a aquisição desta pela Oracle. Sendo um fork (uma versão derivada) do MySQL, ele é conhecido pela sua compatibilidade, desempenho e pelo compromisso com a licença de código aberto, sendo amplamente adotado em diferentes distribuições Linux e em serviços de nuvem como AWS e Azure. 

## Important topics
- CTE (Common Table Expression) ou JOIN com ROW_NUMBER() (se o banco suporta SQL com funções de janela — MySQL 8+, PostgreSQL, etc.);


### Exemple

```sql
WITH orders_by_month (mnth, yr, total) AS (
    SELECT MONTH(order_date), YEAR(order_date), SUM(total_price)
    FROM orders
    GROUP BY MONTH(order_date), YEAR(order_date)
)

SELECT mnth, yr, total
FROM orders_by_month
ORDER BY mnth, yr;
```

### See more
- https://www.mysql.com/