# Tips

[Online tool](https://jsonpath.com/)

## JSONPath Syntax

E.g. Result Source elastic search. Extract 'codigo' atributte.  

```
{
  "took": 163,
  "timed_out": false,
  "_shards": {
    "total": 5,
    "successful": 5,
    "skipped": 0,
    "failed": 0
  },
  "hits": {
    "total": 516,
    "max_score": 0,
    "hits": [
      {
        "_index": "any-index-here",
        "_type": "any-type-here",
        "_id": "10518739",
        "_score": 0,
        "_source": {
          "codigo": 10518739
        }
      }
    ]
  }
}
```


Result json path:

```
[
  10518739
]
```


