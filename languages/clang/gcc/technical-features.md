# C programming language

## Headers

```c
#include<stdio.h>   // for input/output functions like printf, scanf
#include<stdbool.h> // for using bool, true, false
```

This line *includes the Standard Input/Output library.*
`stdio.h` stands for *Standard Input Output Header.*

- It provides functions for input and output, like:
- `printf()` – to print output to the screen.
- `scanf()` – to take input from the user.
- `getchar()`, `putchar()`, `fopen()`, etc.



```c
#include <stdbool.h>
```

This line lets you use *boolean types* in C.

- C originally didn't have a built-in bool type like some other languages (e.g., C++, Python).
- This header adds:
  - `bool` as an alias for _Bool (an integer type under the hood).
  - `true` (which is 1)
  - `false` (which is 0)

E.g.

```c
#include <stdbool.h>

bool isRaining = true;

if (isRaining) {
    printf("Bring an umbrella!\n");
}
```

### What is a Header in C?

A *header* is a file that contains:

- Declarations of functions (like printf, scanf)
- Macros
- Type definitions (like bool, size_t, etc.)

Basically, headers tell the compiler what functions and types exist — before it tries to compile your code.

They usually have a .h extension, like:

- `stdio.h` (standard input/output)
- `math.h` (math functions like `sqrt`, `pow`)
- `string.h` (string functions like `strlen`, `strcpy`)
- `stdbool.h` (boolean support)

### Why Do Headers Matter?
If you try to use a function like printf() without including its header (stdio.h), the compiler has no idea what it is.

👉 You’d get an error like:
```bash
implicit declaration of function 'printf'
```

By including the header, you're basically saying:

“Hey compiler, I'm going to use stuff from this library — here's where to find the declarations.”

### Analogy: Think of it like this...
If your C file is a book, then the header is like the table of contents or index.

It doesn’t contain the actual implementation — just the info you need to use it.