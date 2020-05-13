# ElasticSearch technical features

- Index, Types, Shards and Replicas
 
 Follow a relational database analogy: 

| Relational Database | ElasticSearch |
|---------------------|---------------|
| Instance            | Index         |
| Table               | Type          |
| Scheme              | Mapping       |
| Tuple               | Document      |
| Column              | Atribute      |

### Verbs HTTP allowed in ElasticSerch API REST:
List of HTTP verbs availables on elastic: `HEAD`, `PUT`, `POST`, `GET` and `DELETE`.

- HTTP `HEAD`
Return only HTTP Headers. It does not return the doc. It's porpouse is just to know if the doc exists or not. E.g.

```
curl -XHEAD -v http://localhost:9200/catalog/people/1
```

- HTTP `GET`
You use GET to retrieve a document and its source or stored fields from a particular index. Use HEAD to verify that a document exists. 
[See Reference](https://www.elastic.co/guide/en/elasticsearch/reference/current/docs-get.html)

```
curl -X GET "localhost:9200/twitter/_doc/0?pretty"
```

