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

- HTTP `PUT`
Replace full `document` in a specific `URI`. The use of ID is mandatory. E.g.

```
curl -X PUT "localhost:9200/countersindex/_doc/1?pretty" -H 'Content-Type: application/json' -d'
{
    "counter" : 1,
    "tags" : ["red"]
}'
```

- HTTP `DELETE`

Removes a JSON document from the specified index. E.g.
```
curl -X DELETE "localhost:9200/twitter/_doc/1?routing=kimchy&pretty"
```
[See Reference](https://www.elastic.co/guide/en/elasticsearch/reference/current/docs-delete.html)

- HTTP `POST`

Use post when you want to `create` a new document or `_update` a existent documento.

- Creating a new doc: 

```
curl -X POST "localhost:9200/test" -H 'Content-Type: application/json' -d'
{
    "doc" : {
        "name" : "John Doe"
    }
}
'
```

- _Update_ a existent doc: 
Post allow to do partial update in a doc. The famous `_update`. E.g.

```
curl -X POST "localhost:9200/test/_update/1?pretty" -H 'Content-Type: application/json' -d'
{
    "doc" : {
        "name" : "new_name"
    }
}
'
```