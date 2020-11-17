# Olá Mundo

## Primeiro programa em Go
```go

// Programas executáveis iniciam com o pacote main
package main

/*
    Os códigos em Go são organizados em pacotes
    e para usá-los é necessário declarar um ou vários imports
*/
import "fmt"

// A porta de entrada de um programa Go é a função main
func main() {
	fmt.Printf("Olá Mundo!\r\n")
}

```

Para rodar o programa use o seguinte comando:

```bash
go run ola_mundo.go
```

Para compilar o programa em um executável independente use o seguinte comando:
```bash
go build ola_mundo.go
```

Agora o programa pode ser executado simplesmente sendo chamado na linha de comando e não precisa mais do ambiente do Go instalado.

## Boas praticas
Go tem uma ferramenta de formatação de código que deixa seu código direitinho no formato padronizado chamado `go fmt`.

```bash
go fmt ola_mundo.go
```