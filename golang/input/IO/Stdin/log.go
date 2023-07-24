package main

import (
	"fmt"
	"os"
)

func main() {
	logRegister("Olá mundo")
}

func logRegister(message string) {
	f, err := os.OpenFile("./log.txt", os.O_RDWR|os.O_CREATE|os.O_APPEND, 0664)
	if err != nil {
		fmt.Println(err)
	}

	f.Write([]byte(message + "\n"))
}
