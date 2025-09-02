# PostgreSQL

PostgreSQL, ou Postgres, é um avançado sistema de gerenciamento de banco de dados objeto-relacional (SGBDRO) de código aberto, conhecido pela sua robustez, confiabilidade e extensibilidade. 
É compatível com o padrão SQL e suporta dados relacionais e não relacionais, como JSON. Suas principais características incluem suporte a propriedades ACID, tolerância a falhas, alta escalabilidade, extensibilidade e uma comunidade ativa que o aprimora continuamente. Empresas usam o PostgreSQL para aplicações web, geoespaciais, financeiras e análise de dados em larga escala. 

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
- https://www.postgresql.org/
- https://alura.com.br/artigos/data-science/cte-o-que-e-para-que-serve-sql
- https://brandur.org/postgres-atomicity#footnote-1-source
- https://pt.stackoverflow.com/questions/101065/o-que-s%C3%A3o-os-%C3%ADndices-b-tree-hash-gist-e-gin