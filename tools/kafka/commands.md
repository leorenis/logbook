# Kafka Bin commands

*Start Zookeper comand* | Acesse o diretório com arquivos do kafka via terminal e execute: `bin/zookeeper-server-start.sh config/zookeeper.properties` 
##
    - ZooKeeper is a centralized service for maintaining configuration information, naming, providing distributed synchronization, and providing group services.

*Start Kafka* | Acesse o diretório com arquivos do kafka via terminal e execute o comando: `bin/kafka-server-start.sh config/server.properties`

* Create Kafka topics execute: `bin/kafka-topics.sh --create --bootstrap-server localhost:9092 --replication-factor 1 --partitions 1 --topic ECOMMERCE_NEW_ORDER_EXEMPLE`

* List Kafka topics execute: `bin/kafka-topics.sh `--list --bootstrap-server localhost:9092`

* Describe Kafka topics execute: `bin/kafka-topics.sh --bootstrap-server localhost:9092 --describe`

* Describe Kafka topics by zookeeper execute: `bin/kafka-topics.sh --describe --zookeeper localhost:2181`

* Alter partitions from topic execute: `bin/kafka-topics.sh --alter --zookeeper localhost:2181 --topic ECOMMERCE_NEW_ORDER --partitions 3`

### 
    Is not possible alter replication factor for existent topic.

* Producer kafka topic execute: `bin/kafka-console-producer.sh --broker-list localhost:9092 --topic ECOMMERCE_NEW_ORDER_EXEMPLE`

* Consumer kafka topic execute: `bin/kafka-console-consumer.sh --bootstrap-server localhost:9092 --topic ECOMMERCE_NEW_ORDER_EXEMPLO`

* Consumer kafka topic desde que o topico foi criado execute: `bin/kafka-console-consumer.sh --bootstrap-server localhost:9092 --topic LOJA_NOVO_PEDIDO --from-beginning`

* Consumer Groups kafka all groups describe execute: `bin/kafka-consumer-groups.sh --bootstrap-server localhost:9092 --all-groups --describe`

* Partitions -> é a maneira como o kafka paraleliza as mensagens.  Veja no arquivo config/server.properties.

## Tips
    - Nao adianta mais consumidores no mesmo grupo de consumo do que o número de partitions. Isso fará com que servicos consumidores fiquem sem receber msgs.

## 
    - Quando Aumentar o número de partitions pelo config/server.properties, lembre-se que o kafka irá aplicar somente aos novos tópicos. Caso queira aplicar para topicos existentes altere o tópico --alter. 

Read more in [Kafka Docs](https://kafka.apache.org/documentation/).