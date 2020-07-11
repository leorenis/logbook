# Bitwise operators

### XOR ^
XOR is a binary operation, it stands for "exclusive or", that is to say the resulting bit evaluates to one if only exactly one of the bits is set.

This is its function table:

```
a | b | a ^ b
--|---|------
0 | 0 | 0
0 | 1 | 1
1 | 0 | 1
1 | 1 | 0
```

This operation is performed between every two corresponding bits of a number.

Example: `7 ^ 10`
In binary: `0111 ^ 1010`

```
  0111
^ 1010
======
  1101 = 13
```

**Properties:** The operation is commutative, associative and self-inverse.
It is also the same as addition modulo 2.
