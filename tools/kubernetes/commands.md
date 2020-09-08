# Commands Kubernetes

## Install Kubernetes Controle or kubectl


### Install on Linux

Run this command:

```
curl -LO https://storage.googleapis.com/kubernetes-release/release/$(curl -s https://storage.googleapis.com/kubernetes-release/release/stable.txt)/bin/linux/amd64/kubectl
```

And then run the follow command:

```
chmod +x kubectl && mv kubectl /usr/local/bin/
```



### Install on MacOs

First option:

Run this command:

```
curl -LO https://storage.googleapis.com/kubernetes-release/release/`curl -s https://storage.googleapis.com/kubernetes-release/release/stable.txt`/bin/darwin/amd64/kubectl
```

And then run the follow command:
```
chmod +x kubectl && mv kubectl /usr/local/bin/
```


Or second option:

```
rew install kubectl
```


