## 🛠️ Commands
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

### When NOT to Use cat
For simple viewing of a large file, cat dumps the entire file at once. You might prefer:

- `less file.txt` – view file one screen at a time.
- `head file.txt` – view the first few lines.
- `tail file.txt` – view the last few lines.


### 🔍 Summary Table

| Command                     | What it Does                   |
| --------------------------- | ------------------------------ |
| `cat file.txt`              | View file content              |
| `cat > file.txt`            | Create/overwrite file          |
| `cat >> file.txt`           | Append to file                 |
| `cat file1 file2`           | Show multiple files            |
| `cat file1 file2 > newfile` | Combine into new file          |
| `cat -n file.txt`           | Show content with line numbers |

### See more
- https://guialinux.uniriotec.br/cat
