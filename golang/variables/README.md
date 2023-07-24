# Variáveis

## Declarando variáveis em Go
```go
// Para declarar a variável e atribuir um valor
var name string = "Gopher"

// OU
var name string
name = "Gopher"


// Declarando a variável do tipo inteiro
var age int = 53

// Declarando a variável do tipo byte
var b byte = 255

// Declarando a variável do tipo Float32
var temp float32 = 36.6

// Print
fmt.Println("Olá sr.", name)
fmt.Println("Idade.", age)
fmt.Println("Temperatura.", temp)

// Print Types
fmt.Println("O nome é", reflect.TypeOf(name))
fmt.Println("A idade é", reflect.TypeOf(age))
fmt.Println("A temperatura é", reflect.TypeOf(temp))
fmt.Println("O byte é", reflect.TypeOf(b))
```

## Declarando variáveis com inferência de tipo
```go
// Nesse caso não precisamos definir o tipo da variável.
// O próprio go vai identificar o tipo da variável de acordo o valor da mesma

temp := 5 // Atribui o valor 5 à variável
```

## Operados em variáveis
```go
temp += 5 // temp = temp + 3
temp -= 6 // temp = temp - 3
temp /= 3 // temp = temp / 2
temp *= 3 // temp = temp * 2
temp %= 3 // temp = temp % 2
```

## Criando múltiplas variáveis
```go

// Atribuição de variáveis de uma só vez
x, y := 1, 2
```

## Troca de valores das variáveis
```go
x, y = y, x // 2, 1
```

## Variáveis sem valor
No Go, quando não atribuímos um valor a uma variável, a linguagem atribui um valor zerado a esta variável.
Por exemplo, se for um inteiro, seu valor será 0, se for um número flutuante, seu valor será 0.0, e se for uma string, seu valor será uma string vazia.

## Variável não utilizada
Na linguagem Go é não podemos declarar uma variável e não utilizá-la.

## Inferência de tipo
No Go podemos omitir o tipo da variável pois a linguagem consegue fazer a inferência do tipo automaticamente.
Por exemplo, *var nome = "Maria"* - Podemos omitir a palavra reservada string pois o Go sabe que se o valor começa entre aspas então é do tipo string

## Declaração de variável encurtada
No Go podemos encurtar a declaração de uma variável utilizando a seguinte sintaxe - *nome := "Maria"* - Nesse caso criamos uma variável chamada nome e fizemos a inferência do tipo para string