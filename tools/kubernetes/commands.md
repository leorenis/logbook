# Commands Kubernetes

## Install Kubernetes Controle or kubectl


### Install on Linux

Run this command:

```
curl -LO "https://storage.googleapis.com/kubernetes-release/release/$(curl -s https://storage.googleapis.com/kubernetes-release/release/stable.txt)/bin/linux/amd64/kubectl"
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



### Install on Windows

Run this command:

```
curl -Lo https://storage.googleapis.com/kubernetes-release/release/v1.9.0/bin/windows/amd64/kubectl.exe
```


Or if you want use PSGallery:

```
 Install-Script -Name install-kubectl -Scope CurrentUser -Force    

install-kubectl.ps1 [-DownloadLocation <path>]
```

[Read more](https://kubernetes.io/docs/tasks/tools/install-minikube).

Learn more in [Linux Tips](https://www.youtube.com/watch?v=pV0nkr61XP8).
