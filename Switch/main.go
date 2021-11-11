package main

import (
    "fmt"
    "math/rand"
    "time"
)

func main() {
	cara := 0
	coroa := 0

	switch lancarMoeda() {
		case "cara":
			cara++
			fmt.Printf("Caiu cara, total: %d", cara)
		case "coroa":
			coroa++
			fmt.Printf("Caiu coroa, total: %d", coroa)
		default:
			fmt.Println("Caiu em pé")
	}
}

func lancarMoeda() string {
	rand.Seed(time.Now().Unix())
	types := []string{"cara", "coroa"}
	random := rand.Intn(len(types))
	return types[random]
}