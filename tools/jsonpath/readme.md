# Tips

[Online tool](https://jsonpath.com/)

## JSONPath Syntax

E.g. Result Source elastic search. Extract 'codigo' atributte.  

```
{
  "took": 93,
  "timed_out": false,
  "_shards": {
    "total": 5,
    "successful": 5,
    "skipped": 0,
    "failed": 0
  },
  "hits": {
    "total": 1,
    "max_score": 0,
    "hits": [
      {
        "_index": "any-index-here",
        "_type": "any-type-here",
        "_id": "15418739",
        "_score": 0,
        "_source": {
          "codigo": 15418739,
          "nome": "Jhon Doe" 
        }
      }
    ]
  }
}
```

Type the follow command um input text field:

`$ $.hits..hits[0:]._source.codigo `

Result json path:

```
[
  15418739
]
```

Takes only the codigo attribute.

It's Great.

