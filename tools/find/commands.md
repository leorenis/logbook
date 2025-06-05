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

### See more
- https://man7.org/linux/man-pages/man1/find.1.html
- https://developers.redhat.com/cheat-sheets/linux-commands-cheat-sheet


