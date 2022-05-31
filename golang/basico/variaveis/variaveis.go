package main

import (
	"fmt"
	"reflect"
	m "math"
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

	const PI float64 = 3.1415
	var raio = 3.2 // tipo (float64) inferido pelo compilador

	// forma reduzida de criar uma var
	area := PI * m.Pow(raio, 2)
	fmt.Println("A área da circunferência é", area)

	const (
		c1 = 1
		c2 = 2
	)

	var (
		c3 = 3
		c4 = 4
	)

	fmt.Println(c1, c2, c3, c4)

	var e, f bool = true, false
	fmt.Println(e, f)

	x1, y1, z1 := 2, false, "epa!"
	fmt.Println(x1, y1, z1)
}
