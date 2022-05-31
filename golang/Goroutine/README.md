## Goroutine

é uma execução concorrente de função. Um canal (channel) é um mecanismo de comunicação que permite que uma gorrotina passe valores de um tipo especificado a outra gorrotina. A função main executa em uma gorrotina e a instrução go cria gorrotina adicionais. A função main cria um canal de strings usando make.

Para cada argumento de linha de comando, a instrução go no primeiro for/range inicia uma nova gorrotina que executa fetch assincronamente para buscar o URL usando http.Get. A função io.Copy lê o corpo da resposta e descarta-o, escrevendo no stream de saída ioutil.Discard.

Copy devolve a contagem de bytes juntamente com qualquer erro ocorrido. À medida que cada resultado chega, fetch envia uma linha de resumo pelo canal ch.