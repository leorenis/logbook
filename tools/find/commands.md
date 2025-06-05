# Commands
> Finds a file or directory by name.


Find files by type
```
find ~ -type f
```

```
find ~ -type f,l -name "notebook*"
```

List just directories
```
find ~/Documents -type d
```

Find a single file by approximate name
```
find / -iname "*log*txt" 2>/dev/null
```

Find starting from `/` in all file system based on `-type f` that means: only files and `-name "*.log"` represents any name before `.log` extension.
```
find / -type f -name "*.log"
```

Find by content
```
find ~/Documents/ -name "*txt" -exec grep -Hi penguin {} \;
```

Limit listing results
```
find ~/Documents/ -maxdepth 1 -type d
```

Find empty files
```
find ~ -type f -empty
```

Find files by age
> The -mtime option allows you to limit a search to files older than, but also files newer than, some value times 24.
```
find /var/log -iname "*~" -o -iname "*log*" -mtime +30
```

Search a path
```
find / -type d -name 'img' -ipath "*public_html/example.com*" 2>/dev/null
```

### See more
- https://www.redhat.com/en/blog/linux-find-command
- https://man7.org/linux/man-pages/man1/find.1.html
- https://developers.redhat.com/cheat-sheets/linux-commands-cheat-sheet


