# Elasticdump
- Import and export tools for elasticsearch

- [Github Project](https://github.com/taskrabbit/elasticsearch-dump) - Thanks guys.

Here I going to show the 

### Docker install 
If you prefer using docker to use elasticdump, you can download this project from docker hub:

```
docker pull taskrabbit/elasticsearch-dump
```

Then you can use it just by:
using docker run --rm -ti taskrabbit/elasticsearch-dump
you'll need to mount your file storage dir `-v <your dumps dir>:<your mount point>` to your docker container
Example:

```
# Copy an index from production to staging with mappings:
docker run --rm -ti taskrabbit/elasticsearch-dump \
  --input=http://production.es.com:9200/my_index \
  --output=http://staging.es.com:9200/my_index \
  --type=mapping
docker run --rm -ti taskrabbit/elasticsearch-dump \
  --input=http://production.es.com:9200/my_index \
  --output=http://staging.es.com:9200/my_index \
  --type=data

# Backup index data to a file:
docker run --rm -ti -v /data:/tmp taskrabbit/elasticsearch-dump \
  --input=http://production.es.com:9200/my_index \
  --output=/tmp/my_index_mapping.json \
  --type=data
```


## Another exemple

Creates a bash file:

```
#!/bin/bash

docker pull byrnedo/alpine-curl
docker pull taskrabbit/elasticsearch-dump

docker run --rm byrnedo/alpine-curl -XDELETE http://my-project-username:a-strong-password@elastic.server.domain/target-index

docker run --rm taskrabbit/elasticsearch-dump \
  --input=http://my-project-username:a-strong-password@elastic.server.domain/source-index \
  --output=http://my-project-username:a-strong-password@elastic.server.domain/target-index \
  --type=settings
docker run --rm taskrabbit/elasticsearch-dump \
  --input=http://my-project-username:a-strong-password@elastic.server.domain/source-index \
  --output=http://my-project-username:a-strong-password@elastic.server.domain/target-index \
  --type=analyzer
docker run --rm taskrabbit/elasticsearch-dump \
  --input=http://my-project-username:a-strong-password@elastic.server.domain/source-index \
  --output=http://my-project-username:a-strong-password@elastic.server.domain/target-index \
  --type=mapping
docker run --rm taskrabbit/elasticsearch-dump \
  --input=http://my-project-username:a-strong-password@elastic.server.domain/source-index \
  --output=http://my-project-username:a-strong-password@elastic.server.domain/target-index \
  --limit=1000 \
  --type=data

```


- [Read more in](https://github.com/taskrabbit/elasticsearch-dump). Its a great tool!