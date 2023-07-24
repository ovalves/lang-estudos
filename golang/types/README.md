# Types

Em Golang, existem 3 tipos principais: Numeric, Bool and String.
Também há tipos específicos como Int, Float, Rune, Byte, etc.

Por padrão, os valores do tipo string são uma string vazia `""`, para integer e float é `0` e para bool é `false`.

* Numeric
    * int (signed)
        * int8
        * int16
        * int32
        * int64
    * uint (unsigned)
        * uint8
        * uint16
        * uint32
        * uint64
    * float
        * float32
        * float64

Abaixo estão os limites para todos os tipos inteiros em golang:

```go
uint8  ->  0  até  255
uint16 ->  0  até  65535
uint32 ->  0  até  4294967295
uint64 ->  0  até  18446744073709551615

int8  ->  -128                  até  127
int16 ->  -32768                até  32767
int32 ->  -2147483648           até  2147483647
int64 ->  -9223372036854775808  até  9223372036854775807
```

Precisão dos números float
```go
float32 -> -3.4e+38  até 3.4e+38
float64 -> -1.7e+308 até +1.7e+308
```

## Strings

### Byte
Um byte em golang é um número inteiro de 8 bits unsigned, o que significa que ele pode conter dados numéricos de 0 até 255

### Rune
Uma rune é o tipo estendido de byte e armazena números int32 e, portanto, representa Caracteres unicode.

### String
As strings são basicamente um slice de bytes. Cada caractere em uma string é um byte.

## Boolean
Este tipo é usado para armazenar verdadeiro ou falso em golang. O valor padrão de uma variável booleana é false

