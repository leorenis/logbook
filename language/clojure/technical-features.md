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
## Legends
$ -> Indicates a terminal.