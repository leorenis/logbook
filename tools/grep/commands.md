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


### More exemples
-   Find all occurrences of the pattern ‘lrs’ in a file:
```
grep 'lrs' myfile
```
-   Same as above but looking only for complete words:
```
grep -w 'lrs' myfile
```
-   Count occurrences of the exact pattern ‘FOO’ :
```
grep -c FOO myfile
```
-   Same as above but ignoring case:
```
grep -c -i FOO myfile
```
-   Find all occurrences of the pattern ‘.Pp’ at the beginning of a line:
```
grep '^\.Pp' myfile
```

The apostrophes ensure the entire expression is evaluated by grep instead of by the user's shell.
The caret ‘^’ matches the null string at the beginning of a line, and the ‘\’ escapes the ‘.’, which would otherwise match any character.

-   Find all lines in a file which do not contain the words ‘foo’ or ‘bar’:
```
grep -v -e 'foo' -e 'bar' myfile
```
-   Peruse the file ‘calendar’ looking for either 19, 20, or 25 using extended regular expressions:
```
egrep '19|20|25' calendar
```
-   Show matching lines and the name of the ‘*.h’ files which contain the pattern ‘FIXME’.  Do the search recursively from the /usr/src/sys/arm directory
```
grep -H -R FIXME --include="*.h" /usr/src/sys/arm/
```
-   Same as above but show only the name of the matching file:
```
grep -l -R FIXME --include="*.h" /usr/src/sys/arm/
```
-   Show lines containing the text ‘foo’.  The matching part of the output is colored and every line is prefixed with the line number and the offset in the file for those lines that matched.
```
grep -b --colour -n foo myfile
```
-   Show lines that match the extended regular expression patterns read from the standard input:
```
echo -e 'Free\nBSD\nAll.*reserved' | grep -E -f - myfile
```
-   Show lines from the output of the pciconf(8) command matching the specified extended regular
```
pciconf -lv | grep -B3 -A1 -E 'class.*=.*storage'
```
-   Suppress any output and use the exit status to show an appropriate message:
```
grep -q foo myfile && echo File matches
```

To read more, open terminal and type: `man grep`.


### See more
- [Mastering grep with Regular Expressions: Guide for Efficient Text Search](https://www.digitalocean.com/community/tutorials/using-grep-regular-expressions-to-search-for-text-patterns-in-linux)
