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

- Documents once created are imutables. A update change the document version [Docs](https://www.elastic.co/guide/en/elasticsearch/reference/current/docs-update.html).

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
Replace full `document` in a specific `URI`. The use of **ID is mandatory**. 
If you does not use PUT with ID. This exception happens: `No handler found for uri [//twitter/people/] and method [PUT]`.
E.g.

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

Use post when you want to `create` a new document or `_update` an existent documento.

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

## Shards
The shards are how the elasticsearch distributes the data volume. Is similar partitions in relational database. Remember: A **shard cannot to exceed 50GB**.

- Primary shards -> Is the shard where the write operations as `create`, `delete` or `update` in a document happens first.

- Replica shard -> Once the `write operation` have been successfuly finished in a primary shard, the `replica shard` receive the same operation to be replicated. The operation will only be confirmed for all clients when all replicas confirm replication. Therefore, when we receive HTTP OK for a write operation, we know that the information is secure in all replicas.

- *Important* -> The number of shards must be defined when the index is created and cannot be changed. The number of replicas is also defined at the time the index is created, but can change over time. So, you should choose the number of shards well when creating the index.

This was a CRUD using elastic search. [Read more in Document API elastic search](https://www.elastic.co/guide/en/elasticsearch/reference/current/docs.html).

## Optimistic Lock
When using this mechanism, an update only occurs successfully when the version of the document in ElasticSearch is the same as the version of the document indicated in the request.
E.g.

```
PUT /twitter/people/1?version=1
{
    "name" : "new_name"
}
```
If someone has already updated the document, the version will have been increased to 2 and our request will fail. The `HTTP response code will be 409` Conflict and the error message will look something like:

```
{
    "error" : "VersionConflictEngineException[[twitter][2] [people][1]: version conflict, current [2], provided [1]]",
    "status" : 409
}
```

## /_search?q=Field all
Search in full index by term. E.g.

```
GET /clubs/teams/_search?q=football
{}
```
Its the same:

```
GET /clubs/teams/_search?q=_all:futebol
```

## /_search?q=Multiple_fields
Search by brand and vehicle's model in `cars` index with limit of 10 vehicles..

```
 GET /cars/_search?q=brand:honda&model:civic&size=10&from=10
 ```

 To search within AND clause, use:

 ```
 GET /songs/country/_search?q=song+AND+brazil
 ```

 ## Analyzers
 - Elasticsearch ships with a wide range of built-in analyzers, which can be used in any index without further configuration:
 [Learn more about analyzer in a docs](https://www.elastic.co/guide/en/elasticsearch/reference/current/analysis-analyzers.html)

 ### API _analyze
 - Search the tokens per analyzer:

```
GET /_analyze?analyzer=standard&text=I+am+a+yung+man+(just,+19+years+old)+a+millenium
```


[Reference](https://www.elastic.co/guide/en/elasticsearch/reference/current/optimistic-concurrency-control.html).
