# Golang technical features

## Variables
- In `Go` if you dont assign a value for a variable, the language set a possible `less` value to take on.
- All variable declared **MUST be used**. `Golang` throws a `Compile-time error`. Sth like this: _variableXXX declared but not used_.
- There isn't a **float** type in `go`. There's a **float32** for numbers until 32 bits and **float64** for numbers until 64 bits.
- In `go`you can omit type's declaration in the most part of variable's declaration. The golang can *infer* this type. E.g. 

```
    var personName = "John Doe"
```

Instead:

```
var personName string = "John Doe"
```

Or simply omit **var** too. As long as `short assignment statement` is used. E.g.

````
personName := "John Doe"
appVersion := 1.1
age := 28
````

## Flux control
- `if` in *Golang* always expect a _`expression`_ with boolean return.

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
