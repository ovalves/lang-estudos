# Entrada de dados do usuário

## Escaneando o input de dados do usuário
```go
package main

import (
	"fmt"
)

func main() {
    fmt.printLn("1 - Monitorar")
    fmt.printLn("2 - Logs")
    fmt.printLn("3 - Sair")

    // Declarando uma váriavel do tipo int
    // Mapeando a entrada do usuário (STDIN) para a variável command
    var command int
    fmt.Scanf("%d", &command)
}
```

## Scanf
> Faz o mapeamento do STDIN definindo a formatação da entrada do usuário para o tipo esperado.

## Scan
> Faz o mapeamento do STDIN de entrada do usuário para a variável com seu tipo já declarado.
