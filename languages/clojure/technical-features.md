# Clojure technical features

* Function's call

```
(println "Welcome to clojure.")
```

* Simbols definitions

```
(def amount 15)
```

* Sum values

```
(+ 13 3)
```

* Function and params definition

```
(defn print-message []
  (println "### SystemX ###")
  (println "Welcome to Storing."))
```

Calling defined function: 
```
$ (print-message)
```

Practicing functions...

```
(defn ten-percent-discounted
  "Docs: Receive amount e returns 90%."
  [amount]
  (* amount 0.9))
```

Or simply

```
(defn ten-percent-discounted
  "Docs: Receive amount e returns 90%."
  [amount]
  (* amount (- 1 0.10)))
```

Call

`(ten-percent-discounted 100)`

Return: `90.0`

### def 
- Defines a `GLOBAL` symbol in a namespace. Be carefull. You could use `let` instead.

### let 
- Receive a vector. `let` define a variable with local scope. E.g. `(let [discount 0.1]). discount is accessible only inside the function between parentesis.

```
(defn ten-percent-discounted
  "Returns the value with discount of 10%."
  [raw-value]
  (let [discount 0.10]
  (println "Calc discount... Tests")
  (* raw-value (- 1 discount))))  ;; Return last instruction of function.
```

Function call
```
(ten-percent-discounted 100)
```

Or a little bit more clearly.

```
(defn ten-percent-discounted
  "Returns the value with discount of 10%."
  [raw-value]
  (let [discount-rate (/ 10 100)                        ;; Multiples declarations in let... 
        discount      (* raw-value discount-rate)]
  (println "Calc discount of " discount)
  (- raw-value discount)))                              ;; Return last instruction of function.
```
Call
```
(ten-percent-discounted 1000)
```

Discovering a class type in clojure `(class 90N)`. Return is `clojure.lang.BigInt`

### if else in clojure

Look: 

```
(if (> 500 100)
  (println "Greater")
  (println "Less or equals"))
```

```
(if (> 50 100)
  (println "Greater")
  (println "Less or equals"))
```

discount only value-rau greater than 100.

```
(defn ten-percent-discounted
  "Returns the value with discount of 10% when raw value greater than 100."
  [raw-value]
  (if (> raw-value 100)
    (let [discount-rate (/ 10 100)                        ;; Multiples declarations in let... 
        discount      (* raw-value discount-rate)]
    (println "Calc discount of " discount)
    (- raw-value discount))
  raw-value))
```
Call
`(ten-percent-discounted 1000)` **900N**
`(ten-percent-discounted 100)` **100**


## Higher Order Functions

### First Class Functions
In functional programming, functions are first class citizens. This means functions can be treated as values. They can be assigned as values, passed into functions, and returned from functions.

It’s common to see function definitions in Clojure using `defn` like `(defn foo …​)`. However, this is just syntactic sugar for `(def foo (fn …​))` `fn` returns a function object. `defn` returns a var which points to a function object.

### Higher Order Functions

A higher order function is a function that either:

1. Takes one or more functions as arguments

2. Returns a function as its result

This is an important concept in functional programming in any language.

Higher order functions allow us to compose functions. This means we can write small functions and combine them to create larger functions. Like putting a bunch of small LEGO bricks together to build a house.

[See more](https://clojure.org/guides/higher_order_functions).

## Legends
$ -> Indicates a terminal.