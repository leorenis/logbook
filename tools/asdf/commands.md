 ## ASDF Tool (asdf-vm)
Manage multiple runtime versions with a single CLI tool

### More usefull commands exemples

A helper command to print the OS, Shell and asdf debug information. Share this when making a bug report.
```zsh
asdf info
```

```zsh
asdf shimversions node
```

```zsh
asdf install nodejs 22.14.0
```

or

```zsh
asdf install java latest:adoptopenjdk-17
```

Remove a specific version of a package
```
asdf uninstall java latest:adoptopenjdk-17
```

List installed versions:

```
asdf list nodejs
```

List all 

```
asdf list all nodejs
```

List all for an especific provider

```
asdf list all java adoptopenjdk
```

```
asdf list all java | grep -i lts | grep -iv jre
```

### Flags
- _-i_ grep Case Insensitive; 
- _-v_ grep Not Containing; 

### Plugins
Plugins are how asdf knows to handle different tools like Node.js, Ruby, Elixir etc.

See Creating Plugins for the plugin API used to support more tools.

or via the short-name association in the plugins repository:

```
asdf plugin add <name> <git-url>
# asdf plugin add elm https://github.com/vic/asdf-elm
```
Or

```
asdf plugin add <name>
# asdf plugin add erlang
```


```
asdf plugin list
# asdf plugin list
# java
# nodejs
```

```
asdf plugin list all
```


```
asdf plugin remove <name>
# asdf plugin remove erlang
```

### All Commands
```
MANAGE PLUGINS
asdf plugin add <name> [<git-url>]      Add a plugin from the plugin repo OR,
                                        add a Git repo as a plugin by
                                        specifying the name and repo url
asdf plugin list [--urls] [--refs]      List installed plugins. Optionally show
                                        git urls and git-ref
asdf plugin list all                    List plugins registered on asdf-plugins
                                        repository with URLs
asdf plugin remove <name>               Remove plugin and package versions
asdf plugin update <name> [<git-ref>]   Update a plugin to latest commit on
                                        default branch or a particular git-ref
asdf plugin update --all                Update all plugins to latest commit on
                                        default branch


MANAGE TOOLS
asdf current                            Display current version set or being
                                        used for all packages
asdf current <name>                     Display current version set or being
                                        used for package
asdf help <name> [<version>]            Output documentation for plugin and tool
asdf install                            Install all the package versions listed
                                        in the .tool-versions file
asdf install <name>                     Install one tool at the version
                                        specified in the .tool-versions file
asdf install <name> <version>           Install a specific version of a package
asdf install <name> latest[:<version>]  Install the latest stable version of a
                                        package, or with optional version,
                                        install the latest stable version that
                                        begins with the given string
asdf latest <name> [<version>]          Show latest stable version of a package
asdf latest --all                       Show latest stable version of all the
                                        packages and if they are installed
asdf list <name> [version]              List installed versions of a package and
                                        optionally filter the versions
asdf list all <name> [<version>]        List all versions of a package and
                                        optionally filter the returned versions
asdf set [-u] [-p] <name> <versions...> Set a tool version in a .tool-version in
                                        the current directory, or a parent
                                        directory.
asdf uninstall <name> <version>         Remove a specific version of a package
asdf where <name> [<version>]           Display install path for an installed
                                        or current version
asdf which <command>                    Display the path to an executable


UTILS
asdf exec <command> [args...]           Executes the command shim for current version
asdf env <command> [util]               Runs util (default: `env`) inside the
                                        environment used for command shim execution.
asdf info                               Print OS, Shell and ASDF debug information.
asdf version                            Print the currently installed version of ASDF
asdf reshim <name> <version>            Recreate shims for version of a package
asdf shimversions <command>             List the plugins and versions that
                                        provide a command
```


- [Link Get Started ASDF](https://asdf-vm.com/#/core-manage-asdf-vm)
- [Video Akita](https://youtu.be/epiyExCyb2s?t=2588)
