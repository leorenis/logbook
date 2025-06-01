# Kotlin Setup

## Setting Up Kotlin with asdf Version Manager

`asdf` is a powerful version manager that lets you install and switch between multiple versions of programming languages. To set up Kotlin using asdf, follow these steps:

### Install asdf (if not already installed):

- Install asdf (if you haven’t already)
```bash
git clone https://github.com/asdf-vm/asdf.git ~/.asdf --branch v0.13.1
echo '. "$HOME/.asdf/asdf.sh"' >> ~/.bashrc    # or ~/.zshrc depending on your shell
echo '. "$HOME/.asdf/completions/asdf.bash"' >> ~/.bashrc
source ~/.bashrc    # or source ~/.zshrc
```

- Install the Kotlin plugin

```bash
asdf plugin add kotlin
```

- List available Kotlin versions
```bash
asdf list-all kotlin
```
> Choose the version you want to install (e.g., 1.9.0).

- Install a specific Kotlin version
```bash
asdf install kotlin 1.9.0
```
> Replace 1.9.0 with your preferred version.

- Set the global (or local) Kotlin version

Global (default for all projects):

```bash
asdf global kotlin 1.9.0
```

Local (per-project, in the current directory):
```bash
asdf local kotlin 1.9.0
```

- Verify the installation
```bash
kotlin -version
```

You should see something like:

```bash
Kotlin version 1.9.0-release-<build-info>
```

### See more
- https://kotlinlang.org/docs/getting-started.html
- https://ktor.io/docs/welcome.html
- https://spring.io/guides/tutorials/spring-boot-kotlin
- https://github.com/leorenis/kt-samples
