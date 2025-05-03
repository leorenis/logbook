# PHP Setup

## Setting Up PHP with asdf Version Manager

`asdf` is a powerful version manager that lets you install and switch between multiple versions of programming languages. To set up PHP using asdf, follow these steps:

### Install asdf (if not already installed):
- Install asdf (if not already installed):

```bash
git clone https://github.com/asdf-vm/asdf.git ~/.asdf --branch v0.13.1
echo '. "$HOME/.asdf/asdf.sh"' >> ~/.bashrc
source ~/.bashrc

```

- Add the PHP plugin:

```bash
asdf plugin add php https://github.com/asdf-community/asdf-php.git
```

- Install PHP:
```bash
asdf install php latest
asdf global php latest
```

- Verify the installation:

```bash
php -v
```

### See more
- https://github.com/leorenis/php-samples
