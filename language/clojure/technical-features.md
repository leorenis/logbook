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
  (* raw-value (- 1 discount))))
```
(ten-percent-discounted 100)
``

## Legends
$ -> Indicates a terminal.