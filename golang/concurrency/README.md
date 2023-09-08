# Gorrotinas e Canais

Go possibilita dois tipos de programação concorrente, gorrotinas e canais.

### Exemplo: Fibonacci com animação de spinner:
```go
func main() {
	go spinner(100 * time.Millisecond)
	const n = 45
	fibN := fib(n)
	fmt.Printf("\rFibonacci(%d) = %d\n", n, fibN)
}

func fib(x int) int {
	if x < 2 {
		return x
	}

	return fib(x-1) + fib(x-2)
}

func spinner(delay time.Duration) {
	for {
		for _, r := range `-\|/` {
			fmt.Printf("\r%c", r)
			time.Sleep(delay)
		}
	}
}
```

Após vários segundos de animação, a chamada para fib(45) retorna, e a função main exibe seu resultado. Quando a função main retorna, todas as gorrotinas são abruptamentes encerradas, e o programa termina.:

```bash
❯ go run fibonacci/fib.go
Fibonacci(45) = 1134903170
```

### Exemplo: Servidor de relógio concorrente:
> _exemplos/concurrent_clock_server/clock_server.go
```go
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
```
