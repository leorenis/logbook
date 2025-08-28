# Commands
> [!TIP]
> base64 encodes and decodes Base64 data, as specified in RFC 4648.  With no options, base64 reads raw data from stdin and writes encoded data as a continuous block to stdout.

The following options are available:
| Opção                 | Longa opção           | Descrição                                                                 |
|-----------------------|------------------------|---------------------------------------------------------------------------|
| `-b count`            | `--break=count`        | Insere quebras de linha a cada *count* caracteres. Padrão é 0 (sem quebras). |
| `-d`, `-d`, `-D`      | `--decode`             | Decodifica o stream Base64 em dados binários.                             |
| `-h`                  | `--help`               | Exibe o resumo de uso e sai.                                              |
| `-i input_file`       | `--input=input_file`   | Lê a entrada de *input_file*. Padrão é stdin; `-` também representa stdin. |
| `-o output_file`      | `--output=output_file` | Escreve a saída em *output_file*. Padrão é stdout; `-` também representa stdout. |

### Utilities

Encodes file using flag `-i` as input file 
```zsh
base64 -i document.pdf -o document_base64.txt
```

Decodes file using flag `-i` as input file 
```zsh
base64 -d -i document_base64.txt > validated.pdf
```

Encodes and validade using decode with the same command.
```zsh
base64 -i document.pdf > document_base64.txt && base64 -d -i document_base64.txt > validated.pdf
```

### See more
- http://en.wikipedia.org/wiki/Base64


