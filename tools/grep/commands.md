 ## GREP - Global Regular Expression and Print
The `grep` command is one of the most useful commands in a Linux terminal environment.

### Common Options

By default, `grep` will search for the exact specified pattern within the input file and return the lines it finds. You can make this behavior more useful though by adding some optional flags to `grep`.

```
cat file.txt | grep GNU
```

If you want grep to ignore the “case” of your search parameter and search for both upper- and lower-case variations, you can specify the `-i` or `--ignore-case` option.

```
cat file.txt | grep -i gnu
```

If you want to find all lines that *do not* contain a specified pattern, you can use the `-v` or `--invert-match` option.

```
cat file.txt | grep -v gnu
```

It is often useful to know the line number that the matches occur on. You can do this by using the `-n` or `--line-number` option. Re-run the previous example with this flag added:

```
cat README.md | grep -n gnu
```

### See more
- [Mastering grep with Regular Expressions: Guide for Efficient Text Search](https://www.digitalocean.com/community/tutorials/using-grep-regular-expressions-to-search-for-text-patterns-in-linux)
