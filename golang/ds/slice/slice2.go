package main

import "fmt"

func main() {
	numbers := make([]int, 15)

	for n := 1; n <= len(numbers); n++ {
		fmt.Printf("%d^2 = %d\n", n, n*n)
	}
}
