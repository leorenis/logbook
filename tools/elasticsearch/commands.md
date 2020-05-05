# ElasticSearch Docker Configs
Elasticsearch is also available as Docker images. The images use `centos:7` as the base image.

A list of all published Docker images and tags is available at www.docker.elastic.co. The source files are in [Github](https://github.com/elastic/elasticsearch/blob/7.6/distribution/docker).

## Pulling the image

```
docker pull docker.elastic.co/elasticsearch/elasticsearch:7.6.2
```

## Starting a single node cluster with Dockeredit

```
docker run -p 9200:9200 -p 9300:9300 -e "discovery.type=single-node" docker.elastic.co/elasticsearch/elasticsearch:7.6.2
```

Or instead 

## Starting a multi-node cluster with Docker Compose

To get a three-node Elasticsearch cluster up and running in Docker, you can use Docker Compose:

1. Create a `docker-compose.yml` file:

````
version: '2.2'
services:
  es01:
    image: docker.elastic.co/elasticsearch/elasticsearch:7.6.2
    container_name: es01
    environment:
      - node.name=es01
      - cluster.name=es-docker-cluster
      - discovery.seed_hosts=es02,es03
      - cluster.initial_master_nodes=es01,es02,es03
      - bootstrap.memory_lock=true
      - "ES_JAVA_OPTS=-Xms512m -Xmx512m"
    ulimits:
      memlock:
        soft: -1
        hard: -1
    volumes:
      - data01:/usr/share/elasticsearch/data
    ports:
      - 9200:9200
    networks:
      - elastic
  es02:
    image: docker.elastic.co/elasticsearch/elasticsearch:7.6.2
    container_name: es02
    environment:
      - node.name=es02
      - cluster.name=es-docker-cluster
      - discovery.seed_hosts=es01,es03
      - cluster.initial_master_nodes=es01,es02,es03
      - bootstrap.memory_lock=true
      - "ES_JAVA_OPTS=-Xms512m -Xmx512m"
    ulimits:
      memlock:
        soft: -1
        hard: -1
    volumes:
      - data02:/usr/share/elasticsearch/data
    networks:
      - elastic
  es03:
    image: docker.elastic.co/elasticsearch/elasticsearch:7.6.2
    container_name: es03
    environment:
      - node.name=es03
      - cluster.name=es-docker-cluster
      - discovery.seed_hosts=es01,es02
      - cluster.initial_master_nodes=es01,es02,es03
      - bootstrap.memory_lock=true
      - "ES_JAVA_OPTS=-Xms512m -Xmx512m"
    ulimits:
      memlock:
        soft: -1
        hard: -1
    volumes:
      - data03:/usr/share/elasticsearch/data
    networks:
      - elastic

volumes:
  data01:
    driver: local
  data02:
    driver: local
  data03:
    driver: local

networks:
  elastic:
    driver: bridge
````

2. Run `docker-compose` to bring up the cluster:

````
docker-compose up
````

3. Submit a _cat/nodes request to see that the nodes are up and running:

```
curl -X GET "localhost:9200/_cat/nodes?v&pretty"
```

Or use the cerebro.

## Credits
[Read more](https://www.elastic.co/guide/en/elasticsearch/reference/7.6/docker.html#docker-cli-run-dev-mode) on ElasticSearch Docs.


# Cerebro app
cerebro is an open source(MIT License) elasticsearch web admin tool built using Scala, Play Framework, AngularJS and Bootstrap.

- [Github project](https://github.com/lmenezes/cerebro)

### Requirements
- cerebro needs Java 1.8 or newer to run.

## Cerebro docker
`cerebro-docker` contains the official docker files for cerebro project. Images are periodically uploaded in lmenezes/cerebro docker hub repo.

### Usage
For using latest cerebro execute:

```
docker run -p 9000:9000 lmenezes/cerebro
```

For using a specific version run:

```
docker run -p 9000:9000 lmenezes/cerebro:0.8.3
```

Open the browser and access `http://localhost:9200/`. In the field: Node address put `http://172.17.0.2:9200`

### Configuration
You can configure a custom port for cerebro by using the CEREBRO_PORT environment variable. This defaults to 9000.

### Example

```
docker run -e CEREBRO_PORT=8080 -p 8080:8080 lmenezes/cerebro
```

Project on [Docker Hub](https://hub.docker.com/r/lmenezes/cerebro/).
