# Docker commands

* _`docker ps`_ -> Lista todos os containers em execução.
* _`docker ps -all`_ ->  Lista todos os containers, independente de estarem em execução ou não.
* _`docker rm [containerID]`_ -> Remove o container com o ID XXX. Com a flag `-force`, o comando vai parar e remover o container.
* _`docker container prune`_ -> Remove todos os containers que não estão sendo executados.
* _`docker images`_ -> Lista todas as images criadas
* _`docker rmi [imageID]`_ -> Remove image com o ID XXX, Desde que esta não esteja sendo usada por algum container criado.
* _`docker start [containerID]`_ -> Inicializa a execução de um container em estado PARADO.
* _`docker stop [containerID]`_ -> Encerra a execução de um container em estado EXECUTANDO.
* _`docker port [containerID]`_ -> Lista as portas que estao mapeadas.
* _`docker inspect`_ -> Inspeciona um container. Para ver os Mounts [Volumes montados] por exemplo.
* _`docker build`_ -> Serve para buildar uma imagem a partir de um Dockerfile.
* _`docker login`_ -> inicia o processo de login no Docker Hub.
* _`docker push`_ -> envia a imagem criada para o Docker Hub (hub.docker.com). Ex. [docker push username/node]
* _`docker pull`_ -> Permite baixar/pull de uma imagem da nuvem para uma maquina. [docker pull username/node]
* _`docker pull run`_ -> Permite baixar e executar uma imagem do repositório.
* _`docker network create --driver bridge NOME_DA_REDE`_ -> Permite criar uma rede para comunicacao entre containers.
* _`hostname -i`_ -> mostra o ip atribuído ao container pelo docker (funciona apenas dentro do container).
* _`docker run -it --name NOME_CONTAINER --network NOME_DA_REDE NOME_IMAGEM`_ -> cria um container especificando seu nome e qual rede deverá ser usada.
* _`docker exec -it --name [NOME_CONTAINER or ID] bash`_ -> executa um comando dentro do container em modo iterativo usanto o terminal tty, terminal padrao do container, executando o comando `bash`. Dica: O `docker run` cria um novo container e executa-o. O `docker exec` permite executar um comando em um container que já está em execução.
* _`docker history [NOME_CONTAINER or ID]`_ -> lista todas as camadas para formar o container. [Leia mais](https://docs.docker.com/engine/reference/commandline/)
* O docker dispõe por padrão de três redes: bridge, host e none. Redes bridges criadas manualmente permitem comunicação via hostname. A rede host remove o isolamento de rede entre o container e o host. A rede none remove a interface de rede do container.
* _`docker build -t leorenis/php82:0.0.1 .`_ -> A partir do Dockerfile será gerado uma imagem com a tag `leorenis/php82:0.0.1`, considerando o diretório atual.
* _`docker run -it --name clinup -v ~/Code/PHP/projects/app-clinup:/var/www/html/app -p8000:8000 leorenis/php72:0.0.1 bash`_ -> Executa container nomeando para `myapp` em modo iterativo, mapeia o volume do app a partir da imagem `leorenis/php82` com terminal bash.

* _`docker login `_ -> Executa login no docker hub.
* _`docker tag leorenis/php72:0.0.1 leorenis/php72:0.0.1 `_ -> cria tag para image php72:0.0.1 do usuario leorenis no dockerHub.

# Flags
* _`-it`_ -> Executa um container em modo ‘iterativo’ com o terminal.

## Flags do comando [docker run]
* _`-a`_ -> Inicia um container em modo ‘attachement’ com o terminal.

* _`-d`_ -> Inicia um container em modo ‘dettached’ com o terminal. Liked headless.

* _`-i`_ -> Inicia um container em modo ‘iterativo’ com o terminal.

* _`-P`_ -> Associa/Mapeia uma porta do container com uma porta aleatoriamente do Computador Local que está rodando o docker. Ex. [80/tcp -> 0.0.0.0:32769,443/tcp -> 0.0.0.0:32768].

* _`-p`_ -> Associa/Mapeia uma porta do container para uma porta específica. [docker run -d -p 123456:80 ]. Ex. [80/tcp -> 0.0.0.0:123456].

* _`-t`_ -> Define to tempo em segundos para por exemplo executar junto ao comando [docker stop -t 0 containerID].

* _`-e`_ -> Define variaveis de ambiente [docker run -d -P -e AUTHOR="JOHN DOE" imageXXX]

* _`-v`_ -> Define um diretório que será utilizado para guardar Volume [docker run -v "/var/www" imageXXX]. Ou mapear entre o Docker HOST e o container.[docker run -it -v "/Users/username/Docker/Volumes:/var/www" ubuntu].

* _`-w`_ -> Working Directory. Ensina ao container em qual diretório um comando deverá ser executado. Ex. [ docker run -p 8080:3000 -d -v "/Users/username/Docker/Volumes:/var/www" -w "/var/www" node npm start ].

* _`--name`_ -> Pode ser atrelada ao comando [docker run --name nome-do-container imageXXX]. Serve para nomear um container

 ## Flags do comando [docker ps]
* _`-q`_ -> Lista apenas os IDs dos container. Útil para execucao em varios container. Ex. [docker stop -t0 $(docker ps -q) ]. O comando dá stop em todos os container listados.

## Flags do comando [docker build]

* _`-f`_ -> Define o nome do arquivo que contem as instrucoes Dockerfile. Ex. [docker build -f Dockerfile -t username/node]

* _`-t`_ -> Define a tag, ou seja quem criou a imagem. Ex. [docker build

* _`-f`_ Dockerfile -t username/node]

 ## Flags do comando [docker rm]
* _`-f`_ -> Força a parada de um container que está sendo removido, porém estava em execução. Ex. [docker rm -f containerID].