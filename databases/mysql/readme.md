# MySQL / MariaDB

O MariaDB é um sistema de gestão de bases de dados relacionais (RDBMS) de código aberto, gratuito e de código fonte aberto, criado pelos desenvolvedores originais do MySQL após a aquisição desta pela Oracle. 
Sendo um fork (uma versão derivada) do MySQL, ele é conhecido pela sua compatibilidade, desempenho e pelo compromisso com a licença de código aberto, sendo amplamente adotado em diferentes distribuições Linux e em serviços de nuvem como AWS e Azure. 


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

### 🧠 O que é uma CTE?
Uma **CTE** é uma expressão temporária que você pode usar dentro de uma consulta SQL. Ela facilita a leitura e organização do código, especialmente quando você precisa reutilizar ou estruturar dados antes de fazer a consulta principal.

---

### 📦 Explicando o código

```sql
WITH orders_by_month (mnth, yr, total) AS (
    SELECT MONTH(order_date), YEAR(order_date), SUM(total_price)
    FROM orders
    GROUP BY MONTH(order_date), YEAR(order_date)
)
```

#### O que está acontecendo aqui:
- **`orders_by_month`** é o nome da CTE.
- Os nomes entre parênteses (`mnth`, `yr`, `total`) são os aliases das colunas que serão retornadas.
- Dentro da CTE:
  - `MONTH(order_date)` extrai o mês da data do pedido.
  - `YEAR(order_date)` extrai o ano da data do pedido.
  - `SUM(total_price)` calcula o total de vendas (ou valor dos pedidos) para cada mês/ano.
  - `GROUP BY MONTH(order_date), YEAR(order_date)` agrupa os dados por mês e ano para fazer a soma corretamente.


---

### 📊 Consulta principal

```sql
SELECT mnth, yr, total
FROM orders_by_month
ORDER BY mnth, yr;
```

#### O que ela faz:
- Seleciona os dados agregados da CTE.
- Ordena os resultados por mês e ano.

---

### 🧾 Exemplo de saída

| mnth | yr   | total     |
|------|------|-----------|
| 1    | 2023 | 15,000.00 |
| 2    | 2023 | 18,500.00 |
| 3    | 2023 | 12,300.00 |

Isso mostraria o total de vendas por mês e ano, ordenado cronologicamente.

---

### See more
- https://www.mysql.com/
- https://alura.com.br/artigos/data-science/cte-o-que-e-para-que-serve-sql