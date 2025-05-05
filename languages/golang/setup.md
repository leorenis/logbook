# Golang

Go is an open source, statically typed, compiled programming language built by Google.
It combines the best of both statically typed and dynamically typed languages and gives you the right mixture of efficiency and ease of programming. It is primarily suited for building fast, efficient, and reliable server side applications.

## Installing Go
Go binary distributions are available for all major operating systems like Linux, Windows, and MacOS. It’s super simple to install [Go](https://golang.org) from the binary distributions. 

### Mac OS X
The easiest way to install Go in Mac OS is by using [Homebrew](https://brew.sh/)
```bash
brew install go
```

### Linux OS
Download the Linux distribution from [Go’s official download page](https://golang.org/dl/) and extract it into /usr/local directory.

```bash
sudo tar -C /usr/local -xzf go$VERSION.$OS-$ARCH.tar.gz
```

Next, add the /usr/local/go/bin directory to your PATH environment variable. You can do this by adding the following line to your _`~/.bash_profile file`_.

```bash
export PATH=$PATH:/usr/local/go/bin
```

You can also use any other directory like `/opt/go` instead of `/usr/local` for installing Go.

## Setting GOPATH
The GOPATH environment variable specifies the location of your workspace. By default, the `GOPATH` is assumed to be `$HOME/go` on Unix systems.

If you want to use a custom location as your workspace, you can set the `GOPATH` environment variable by following the instructions below

### Unix Systems (Linux and macOS)
For setting GOPATH in bash shells, add the following line to the `~/.bash_profile` file. If you use Zsh shell, then you need to add the above line to `~/.zshrc` file.

```bash
export GOPATH=$HOME/go
```

In my personal case, I'm using:

```bash
export GOPATH=$HOME/Code/go
```

## Go Workspace
The *workspace* directory contains the following sub directories at its root:

- *src*:  contains Go source files.
- *bin*:  contains the binary executables.
- *pkg*:  contains Go package archives.

In the root project, create a `go.mod` file, e.g: 

```
module gosamples

go 1.24.1
```

## Commands
The easiest way to run the above program is using the go run command 
```bash
go run app.go
```

To compile some program to `run` later use the folow command: 

```bash
go build app.go
```

This command make a binary file compiled called `app` already be running. E.g.

```zsh
./app
```
Using vscode, install the plugin: Go, created by Go Team at Google.
The VS Code Go extension provides rich language support for the Go programming language.


## Credits

from callicoder.com | [Read more here](https://www.callicoder.com/golang-installation-setup-gopath-workspace/).