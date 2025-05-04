# Clojure
Welcome to Clojure!

## Dependencies
Clojure requires Java.

## Clojure installer and CLI tools

Clojure provides [command line tools](https://clojure.org/guides/deps_and_cli) that can be used to start a Clojure repl, use Clojure and Java libraries, and start Clojure programs. See the changelog for version information.

Installation on Mac via Homebrew
Install the command line tools with brew from the clojure/tools tap:

### brew install clojure/tools/clojure
If you’ve already installed, you can upgrade to the latest release with:

```bash
brew upgrade clojure/tools/clojure
```

Also see: Clojure’s Homebrew tap for more information.

### Installation on Linux
Note: You can now use Homebrew on Linux or Windows with WSL, similar to the Mac installation.

To install with the Linux script installer:

Ensure that the following dependencies are installed: bash, curl, rlwrap, and Java.

Use the linux-install script to download and run the install, which will create /usr/local/bin/clj, /usr/local/bin/clojure, and /usr/local/lib/clojure:

```bash
curl -O https://download.clojure.org/install/linux-install-1.10.1.536.sh
chmod +x linux-install-1.10.1.536.sh
sudo ./linux-install-1.10.1.536.sh
```

### Try Clojure online

[repl.it](https://repl.it/languages/clojure) provides a browser-based Clojure repl for interactive exploration.


## Open project on InteliJ

1. Install the `cursive` plugin and restart the IDE. 
2. Create a new `Clojure project`... OBS: Not java closure.
3. `Click` with the right button on `project.cls` in the project root and select the option `Run 'REPL' for projectxx`.

Take look at shortcuts  in `Edit` -> `Structural Editing` options.


## Credits
[Read more](https://clojure.org/guides/getting_started).