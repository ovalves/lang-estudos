# Variáveis

## Declarando variáveis em Go
```go
package main

import (
	"fmt"
	"reflect"
)

func main() {
	// Declarando a variavel do tipo string
	var nome string = "Maria"

	// Declarando a variavel do tipo inteiro
	var idade int = 53

	// Declarando a variavel do tipo byte
	var b byte = 255
	fmt.Println("O byte é", b)

	// Declarando a variavel do tipo Float32
	var temp float32 = 36.6

	// Exibindo a mensagem com a variavel
	fmt.Println("Olá sr.", nome)
	fmt.Println("Idade.", idade)
	fmt.Println("Temperatura.", temp)

	// Exibindo o tipo da variavel com reflexão
	fmt.Println("O nome é", reflect.TypeOf(nome))
	fmt.Println("A idade é", reflect.TypeOf(idade))
	fmt.Println("A temperatura é", reflect.TypeOf(temp))
	fmt.Println("O byte é", reflect.TypeOf(b))

	// inferência de tipo
	i := 5 // Criando a variável i
	i += 5 // i = i + 3
	i -= 6 // i = i - 3
	i /= 3 // i = i / 2
	i *= 3 // i = i * 2
	i %= 3 // i = i % 2

	fmt.Println(i)

	// Atribuição de variáveis de uma só vez
	x, y := 1, 2
	fmt.Println(x, y)

	// Troca de valores das variáveis
	x, y = y, x
	fmt.Println(x, y)
}
```

## Variáveis sem valor
> No Go, quando não atribuímos um valor a uma variável, a linguagem atribui um valor zerado a esta variável. Por exemplo, se for um inteiro, seu valor será 0, se for um número flutuante, seu valor será 0.0, e se for uma string, seu valor será uma string vazia.

## Variável não utilizada
> Na linguagem Go é não podemos declarar uma variável e não utilizá-la.

## Inferência de tipo
> No Go podemos omitir o tipo da variável pois a linguagem consegue fazer a inferência do tipo automaticamente. Por exemplo, var nome = "Maria" - Podemos omitir a palavra reservada string pois o Go sabe que se o valor começa entre aspas então é do tipo string

## Declaração de variável encurtada
> No Go podemos encurtar a declaração de uma variável utilizando a seguinte sintaxe - nome := "Maria" - Nesse caso criamos uma variável chamada nome e fizemos a inferência do tipo para string