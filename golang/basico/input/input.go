package main

import (
	"fmt"
)

func main() {
	fmt.Println("1 - Monitorar")
	fmt.Println("2 - Logs")
	fmt.Println("3 - Sair")

	// Declarando uma váriavel do tipo int
	// Mapeando a entrada do usuário (STDIN) para a variável command
	var command int
	fmt.Scanf("%d", &command)
}
