# Variáveis

## Declarando variáveis em Go
```go
package main

import "fmt"

func main() {
    // Declarando a variavel do tipo string
    var nome string = "Maria"

    // Declarando a variavel do tipo inteiro
    var idade int = 53

    // Declarando a variavel do tipo byte
	var b byte = 255
    fmt.Println("O byte é", b)

    // Declarando a variavel do tipo Float32
    var temp float32 36.6

    // Exibindo a mensagem com a variavel
    fmt.Println("Olá sr.", nome)
    fmt.Println("Idade.", idade)
    fmt.Println("Temperatura.", temp)

    // Exibindo o tipo da variavel com reflexão
	fmt.Println("O nome é", reflect.TypeOf(nome))
	fmt.Println("A idade é", reflect.TypeOf(idade))
	fmt.Println("A temperatura é", reflect.TypeOf(temp))
	fmt.Println("O byte é", reflect.TypeOf(b))
}
```

## Variáveis sem valor
> No Go, quando não atribuímos um valor a uma variável, a linguagem atribui um valor zerado a esta variável. Por exemplo, se for um inteiro, seu valor será 0, se for um número flutuante, seu valor será 0.0, e se for uma string, seu valor será uma string vazia.

## Variável não utilizada
> Na linguagem Go é não podemos declarar uma variável e não utilizá-la.