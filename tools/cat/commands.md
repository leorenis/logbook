# Commands
> [!TIP]
> cat utility reads files sequentially, writing them to the standard output. 

Displays the contents of `file.txt`.
```zsh
cat file.txt
```

Create a new file (until you press Ctrl+D)
```zsh
cat > newfile.txt
```

Append to an existing file
```zsh
cat >> existingfile.txt
```

Append input to a file named *efs-1-setup.log* with superuser (root) permissions.
```zsh
sudo bash -c "cat >> efs-1-setup.log"
```

Concatenate multiple files into one
```zsh
cat file1.txt file2.txt > combined.txt
```

Show line numbers
```zsh
cat -n file.txt
```


Using with pipes
> Sends the output of cat file.txt into grep to search for lines that contain "search term".
```zsh
cat file.txt | grep "search term"
```


### See more
- https://curl.se/
- https://curl.se/docs/tutorial.html

