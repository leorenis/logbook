# Elastic Search Tuning

-> Excelent post on [Elastic Blog](https://www.elastic.co/pt/blog/advanced-tuning-finding-and-fixing-slow-elasticsearch-queries). 

-> Another one [Improving the performance of high-cardinality terms aggregations](https://www.elastic.co/pt/blog/improving-the-performance-of-high-cardinality-terms-aggregations-in-elasticsearch)


## eager_global_ordinals

o support aggregations and other operations that require looking up field values on a per-document basis, Elasticsearch uses a data structure called doc values. Term-based field types such as keyword store their doc values using an ordinal mapping for a more compact representation. This mapping works by assigning each term an incremental integer or ordinal based on its lexicographic order.

The global ordinal mapping must be built before ordinals can be used during a search. By default, the mapping is loaded during search on the first time that global ordinals are needed. This is is the right approach if you are optimizing for indexing speed, but if search performance is a priority, it’s recommended to eagerly load global ordinals eagerly on fields that will be used in aggregations:

```
PUT my-index-000001/_mapping
{
  "properties": {
    "tags": {
      "type": "keyword",
      "eager_global_ordinals": true
    }
  }
}
```

[Read more](https://www.elastic.co/guide/en/elasticsearch/reference/current/eager-global-ordinals.html#eager-global-ordinals)