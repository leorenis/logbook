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
(defn ninety-percent-discounted [amount]
  (* amount 0.9))
```

Call

`(ninety-percent-discounted 100)`

Return: `90.0`


## Legends
$ -> Indicates a terminal.