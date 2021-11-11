# Scraping

Para muitas aplicações, acessar informações da Internet é tão importante quanto acessar o sistema de arquivos local. Go oferece uma coleção de pacotes, agrupados como net, que facilita enviar e receber informações pela Internet, fazer conexões de baixo nível com a rede e configurar servidores, para os quais os recursos de concorrência de Go (apresentados no capítulo 8) são particularmente úteis.

```go
package main

import (
	"fmt"
	"io/ioutil"
	"net/http"
	"os"
)

func main() {
	for _, url := range os.Args[1:] {
		resp, err := http.Get(url)
		if err != nil {
			fmt.Fprintf(os.Stderr, "fetch: %v\n", err)
			os.Exit(1)
		}
		b, err := ioutil.ReadAll(resp.Body)
		resp.Body.Close()
		if err != nil {
			fmt.Fprintf(os.Stderr, "fetch: reading %s: %v\n", url, err)
			os.Exit(1)
		}
		fmt.Printf("%s", b)
	}
}
```

Esse programa apresenta funções de dois pacotes: net/http e io/ioutil. A função http.Get faz uma requisição HTTP e, se não houver erro, devolve o resultado na estrutura de resposta resp. O corpo Body de resp contém a resposta do servidor na forma de um stream pronto para leitura. A seguir, ioutil.ReadAll lê toda a resposta e o resultado é armazenado em b. O stream Body é fechado para evitar vazamento de recursos e Printf escreve a resposta na saída padrão.

Se a requisição HTTP falhar, fetch informa a falha: $ ./fetch http://bad.gopl.io fetch: Get http://bad.gopl.io: dial tcp: lookup bad.gopl.io: no such host Qualquer que seja o caso de erro, os.Exit(1) faz o processo sair com um código de status igual a 1.

### Buscando URLs de modo concorrente

O próximo programa, fetchall, faz a mesma busca do conteúdo de URLs do exemplo anterior, no entanto busca muitos URLs, todos de forma concorrente, de modo que o processo não consumirá mais tempo que a busca mais demorada, em vez de consumir a soma de todos os tempos de busca.

```go
package main

import (
	"fmt"
	"io"
	"io/ioutil"
	"net/http"
	"os"
	"time"
)

func main() {
	start := time.Now()
	ch := make(chan string)

	for _, url := range os.Args[1:] {
		go fetch(url, ch) // start a goroutine
	}

	for range os.Args[1:] {
		fmt.Println(<-ch) // receive from channel ch
	}

	fmt.Printf("%.2fs elapsed\n", time.Since(start).Seconds())
}

func fetch(url string, ch chan<- string) {
	start := time.Now()
	resp, err := http.Get(url)
	if err != nil {
		ch <- fmt.Sprint(err) // send to channel ch
		return
	}

	nbytes, err := io.Copy(ioutil.Discard, resp.Body)
	resp.Body.Close() // don't leak resources

	if err != nil {
		ch <- fmt.Sprintf("while reading %s: %v", url, err)
		return
	}

	secs := time.Since(start).Seconds()
	ch <- fmt.Sprintf("%.2fs  %7d  %s", secs, nbytes, url)
}
```

go run Scraping\scrap_parallel.go https://leetcode.com/ https://www.google.com
0.33s    14800  https://www.google.com
0.43s    47076  https://leetcode.com/
0.43s elapsed

### Goroutine
Uma gorrotina (goroutine) é uma execução concorrente de função. Um canal (channel) é um mecanismo de comunicação que permite que uma gorrotina passe valores de um tipo especificado a outra gorrotina. A função main executa em uma gorrotina e a instrução go cria gorrotina adicionais. A função main cria um canal de strings usando make.

Para cada argumento de linha de comando, a instrução go no primeiro for/range inicia uma nova gorrotina que executa fetch assincronamente para buscar o URL usando http.Get. A função io.Copy lê o corpo da resposta e descarta-o, escrevendo no stream de saída ioutil.Discard. Copy devolve a contagem de bytes juntamente com qualquer erro ocorrido. À medida que cada resultado chega, fetch envia uma linha de resumo pelo canal ch.

Quando uma gorrotina tenta receber ou enviar em um canal, ela fica bloqueada até outra gorrotina tentar a operação correspondente de envio ou recebimento; quando isso acontece, o valor é transferido e ambas as gorrotinas continuam. Nesse exemplo, cada fetch envia um valor (ch <- expressão) pelo canal ch, e main recebe todos eles (<-ch). Deixar todos os Print a cargo de main garante que a saída de cada gorrotina seja processada como uma unidade, sem o risco de haver uma saída embaralhada, se duas gorrotinas terminarem ao mesmo tempo.