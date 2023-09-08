# Net

O Pacote Net oferece componentes para criar programas clientes e servidores em rede; eles se comunicam por meio de TCP, UDP ou sockets de domínio Unix.


### Exemplo: Servidor TCP que escreve as horas no terminal
> clock_server.go
```go
func main() {
	listener, err := net.Listen("tcp", "localhost:8000")
	if err != nil {
		log.Fatal(err)
	}

	for {
		conn, err := listener.Accept()
		if err != nil {
			log.Print(err)
			continue
		}

		handleConn(conn)
	}
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
```
#### Como executar:

Em um terminal rode o programa
```bash
go run net/clock_server.go
```

Em outro terminal rode o programa netcat para visualizar as horas
```bash
❯ nc localhost 8000

14:02:53
14:02:54
14:02:55
```

Esse programa é sincrono, ou seja apenas um cliente por vez pode se conectar e ver as horas. Para que o programa seja executa de forma concorrente e posso lidar com diversos clientes devemos adicionar a palavra reservada **go** na frente da chamada para a função **handleConn(conn)**


### Exemplo programa netcat em go
> netcat.go
```go

func main() {
	conn, err := net.Dial("tcp", "localhost:8000")
	if err != nil {
		log.Fatal(err)
	}

	defer conn.Close()
	mustCopy(os.Stdout, conn)
}

func mustCopy(dst io.Writer, src io.Reader) {
	if _, err := io.Copy(dst, src); err != nil {
		log.Fatal(err)
	}
}
```

Esse programa lê dados da conexão e escreve-os na saída padrão até uma condição de fim de arquivo (end-of-file) ou um erro ocorrer.