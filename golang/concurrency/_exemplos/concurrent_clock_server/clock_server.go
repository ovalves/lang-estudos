package main

import (
	"fmt"
	"io"
	"log"
	"net"
	"os"
	"time"
)

func main() {
	var port string = getPort(os.Args)
	var host string = fmt.Sprintf("localhost:%s", port)
	log.Print("Connecting to: ", host)

	listener, err := net.Listen("tcp", fmt.Sprintf("localhost:%s", port))

	if err != nil {
		log.Fatal(err)
	}

	for {
		conn, err := listener.Accept()
		if err != nil {
			log.Print(err)
			continue
		}

		go handleConn(conn)
	}
}

func getPort(args []string) string {
	if len(args) > 1 {
		return args[1]
	}

	return "8000"
}

func handleConn(conn net.Conn) {
	defer conn.Close()

	for {
		_, err := io.WriteString(conn, time.Now().Format("15:04:05\n"))
		if err != nil {
			return
		}

		time.Sleep(1 * time.Second)
	}
}
