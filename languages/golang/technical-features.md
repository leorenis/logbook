# Golang technical features

## Variables
- In `Go` if you dont assign a value for a variable, the language set a possible `less` value to take on.
- All variable declared **MUST be used**. `Golang` throws a `Compile-time error`. Sth like this: _variableXXX declared but not used_.
- There isn't a **float** type in `go`. There's a **float32** for numbers until 32 bits and **float64** for numbers until 64 bits.
- In `go`you can omit type's declaration in the most part of variable's declaration. The golang can *infer* this type. E.g. 

```go
var personName = "John Doe"
```

Instead:

```go
var personName string = "John Doe"
```

Or simply omit **var** too. As long as `short assignment statement` is used. E.g.

```go
personName := "John Doe"
appVersion := 1.1
age := 28
```

## Flux control
- `if` in *Golang* always expect a _`expression`_ with boolean return. E.g. 
```go
if response.StatusCode == 200 {
    fmt.Println("The site its ok!")
}
```
- switch in *Golang* is more general than C's. The expressions need not be constants or even integers, the cases are evaluated top to bottom until a match is found, and if the switch has no expression it switches on true. It's therefore possible—and idiomatic—to write an if-else-if-else chain as a switch.

```go
func unhex(c byte) byte {
    switch {
    case '0' <= c && c <= '9':
        return c - '0'
    case 'a' <= c && c <= 'f':
        return c - 'a' + 10
    case 'A' <= c && c <= 'F':
        return c - 'A' + 10
    }
    return 0
}
```

There is no automatic fall through, but cases can be presented in comma-separated lists.

```go
func shouldEscape(c byte) bool {
    switch c {
    case ' ', '?', '&', '=', '#', '+', '%':
        return true
    }
    return false
}
```

[See more](https://golang.org/doc/effective_go.html#switch)

## For 
- The `for` loop is similar to—but not the same as—C's. It unifies for and while and there is no do-while. There are three forms, only one of which has semicolons.

```
// Like a C for
for init; condition; post { }

// Like a C while
for condition { }

// Like a C for(;;) or while(true) expressions
for { }
```
For more details [See](https://github.com/leorenis/app-monitor-go/blob/master/app.go#L20).

## Functions
- Functions in `Go` can have multiples return values. E.g.

````
func getNameAndAge() (string, int) {
    name := "John"
    age := 26
    return name, age
````
and call

```
name, age := getNameAndAge()
fmt.Println("Name:", name, "age", age)

```
If you dont care about one of variables you can use `Blank Identifier (underscore)`. E.g

```
name, _ := getNameAndAge()
fmt.Println("Name:", name)

```

### 

Variadic functions can be called with any number of trailing arguments. For example, fmt.Println is a common variadic function.

E.g.

```
func sum(nums ...int) {
    fmt.Print(nums, " ")
    total := 0
    for _, num := range nums {
        total += num
    }
    fmt.Println(total)
}
```

We can call

```
sum(1, 3)
sum(1, 2, 3)

// or
nums := []int{1, 2, 3, 4}
sum(nums...)
```
[Go ahead](https://gobyexample.com/variadic-functions).

## Source file time format

[Time documentation](https://golang.org/src/time/format.go)
