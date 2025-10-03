# Commands

## Custom Ubuntu Links

- material theme ubuntu
- flat remix theme

## Install
package to replace grep.

- `sudo apt install silversearcher-ag` 

```zsh
$ ps aux | ag bash
 ```

 List a specific colunm with command above:

 $ `ps aux | ag bash | awk '{print $2}'`

 Basic file permission

 $ `chmod +x test.txt`

 ## Development environment

 ```zsh
sudo apt install build-essential libssl-dev exuberant-ctags ncurses-term ack-grep fontconfig imagemagick libmagickwand-dev software-properties-common git vim-gtk3 curl default-jdk silversearcher-ag
```

 ## ASDF Tool (asdf-vm)
- Manage multiple runtime versions with a single CLI tool
 - [Link Get Started ASDF](https://asdf-vm.com/#/core-manage-asdf-vm)
 - [Video Akita](https://youtu.be/epiyExCyb2s?t=2588)

 ## Services

 $ `sudo apt -y install postgresql-10 postgresql-contrib postgresql-server-dev-10 redis-server libhiredis-dev memcached libmemcached-dev`


 ## Docker
- [Video Akita](https://youtu.be/epiyExCyb2s?t=3254).
- [Docker Docs](https://docs.docker.com/engine/install/ubuntu/)

Docker configs

```
$ sudo apt-get update
```

1. Update the apt package index and install packages to allow apt to use a repository over HTTPS:

```
$ sudo apt-get install \
    apt-transport-https \
    ca-certificates \
    curl \
    gnupg-agent \
    software-properties-common

```

2. Add Docker’s official GPG key:
```zsh
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
```

3. Use the following command to set up the stable repository. To add the nightly or test repository, add the word nightly or test (or both) after the word stable in the commands below. [Learn about nightly and test channels](https://docs.docker.com/engine/install/).

```
$ sudo add-apt-repository \
   "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
   $(lsb_release -cs) \
   stable"
```

Check package software properties common

```
$ dpkg -L software-properties-common
```

Install docker packages

```
$ sudo apt update && sudo apt-get install docker-ce
```

```
$ sudo usermod -aG docker $USER
```

All environment variables
`set | less`

 ### Devhints.io
 To read more about shell script.
 [Bash Scriptiong](https://devhints.io/bash)
