package main

import (
	"fmt"
	"io"
	"log"
	"net"
	"os"
)

func main() {
	for index, host := range os.Args {
		if index < 1 {
			continue
		}
		log.Print("Connecting to: ", host)
		go connect(host)
	}
}

func connect(host string) {
	conn, err := net.Dial("tcp", host)
	if err != nil {
		log.Fatal(err)
	}

	defer conn.Close()

	mustCopy(os.Stdout, conn, host)
}

func mustCopy(dst io.Writer, src io.Reader, host string) {
	outFile, err := os.Create(fmt.Sprintf("/tmp/%s", host))
	if err != nil {
		panic(err)
	}

	defer outFile.Close()

	if _, err := io.Copy(outFile, src); err != nil {
		log.Fatal(err)
	}
}
