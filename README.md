# golang-estudos

[![MIT License](https://img.shields.io/apm/l/atomic-design-ui.svg?)](https://github.com/ovalves/golang-estudos/blob/main/LICENSE)
[![PR's Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat)](http://makeapullrequest.com)

Este repositório contém estudos e exemplos sobre a linguagem de progração go.

🚀 Introdução
=================

### Resumindo
> Go é uma linguagem de programação criada pela Google. É uma linguagem compilada e focada em produtividade e programação concorrente.

# Instalando

## Download

Faça o download do instalador correspondente ao seu sistema operacional em  [http://golang.org/dl](http://golang.org/dl).

### Microsoft Windows

Apos executar o instalador, Go estará instalada em

```
C:\Go
```

**Lembre!** Você está instalando um compilador, desative qualquer software antivirus antes de compilar seus projetos. Muitos antivirus simplesmente bloqueiam o compilador silenciosamente, sem nenhum alerta e daí o compilador não vai conseguir gerar o executável dos exemplos.

---
### Mac OS X

Apos executar o instaldor, Go estará instalada em:

```
/usr/local/go
```
#### Mac OS X - Alternativa - Usando Homebrew
Se você usa o Homebrew, o Go pode ser instalado com dois simples comandos:

```
brew update
brew install go
```

Após isso o Go estará instalado em:
```
/usr/local/bin/go
```

---
### Linux

Apos executar o instalador Go estará instalada no diretório:

```
/usr/local/go
```

---
### Mas eu não quero instalar nada!

Se você não quiser fazer a instalação para testar os exemplos você pode usar o [The Go Playground](https://play.golang.org)

---

# Configurando

Para que o ambiente de desenvolvimento funcione corretamente é necessário configurar algumas variáveis de ambiente.

**GOROOT** - Deve apontar para o diretório de instalação do Go, você só precisa se preocupar com essa variável se você preferiu instalar a linguagem em outro diretório, o padrão é /usr/local/go/bin ou C:\\Go no caso do Windows.

**PATH** - Deve apontar para o diretório onde os binários foram instalados normalmente /usr/local/go/bin ou C:\\Go\\bin.

**GOPATH** - Deve apontar para seu diretório de trabalho.

## Windows

Instalando pelo MSI o sistema já deve fazer o ajuste no PATH, mas caso seja necessário alguma alteração basta ir no "Painel de Controle" -> "Sistema" -> "Avançado" -> Variáveis de ambiente.
Em algumas versões do Windows você deve ir em "Configurações avançadas do sistema" ->  "Variáveis de ambiente".

## Mac OS X e Linux

No Mac, Linux e BSD você pode adicionar essas variáveis no arquivo de configuração do shell que você estiver usando como .profile no caso do bash ou .zshrc no caso do zsh.

Exemplo:

```bash
export GOPATH=~/projeto
export GOROOT=/usr/local/go
export PATH=$PATH:$GOROOT/bin
```

**Obs:** Caso ainda não esteja você também precisa apontar o git na variavel PATH do seu sistema.

---
## Testando a instalação

Depois de instalado e configurado você pode verificar se Go esta respondendo corretamente pelo comando

```bash
go version
```

Para testar o git execute:

```bash
git --version
```

### Map

Um mapa é uma referência à estrutura de dados criada por `make`. Quando um mapa é passado para uma função, ela recebe uma cópia da referência, portanto qualquer alteração que a função chamada fizer na estrutura de dados subjacente também será visível pela referência ao mapa por quem fez a chamada.

### Go verbos (verbs).

Recursos disponíveis:

- `%d` inteiro em formato decimal
- `%x`, `%o`, `%b` inteiro em formato hexadecimal, octal, binário
- `%f`, `%g`, `%e` número de ponto flutuante: 3.141593 3.141592653589793 3.141593e+00
- `%t` booleano: true ou false
- `%c` runa (código Unicode, exibido como caractere)
- `%s` string `%q` string "abc" ou runa 'c' entre aspas
- `%v` qualquer valor em um formato natural
- `%T` tipo de qualquer valor
- `%%` sinal de porcentagem literal (não indica substituição)

### ReadFile
ReadFile devolve uma fatia de bytes que deve ser convertida em uma string para que possa ser separada por `strings.Split`.

Internamente, `bufio.Scanner`, `ioutil.ReadFile` e `ioutil.WriteFile` usam os métodos `Read` e `Write` de `*os.File`, mas é raro que a maioria dos programadores precise acessar essas rotinas de baixo nível diretamente. As funções de alto nível como aquelas de `bufio` e de `io/ioutil` são mais fáceis de usar.


### Constantes

Uma declaração `const` nomeia constantes, ou seja, valores determinados em tempo de compilação.

Assim como as declarações `var`, as declarações `const` podem estar no nível de pacote (portanto os nomes são visíveis em todo o pacote) ou em uma função (os nomes são visíveis somente dentro dessa função). O valor de uma constante deve ser um `número`, uma `string` ou um `booleano`.


## Tipos nomeados:

Uma declaração type permite dar um nome a um tipo existente. Como tipos referentes a estruturas muitas vezes são longos, quase sempre eles são nomeados. Um exemplo familiar é a definição de um tipo Point para um sistema gráfico 2D:

```go
type Point struct {
    X, Y int
}

var p Point
```

## Ponteiros

Go oferece ponteiros, isto é, valores que contêm o endereço de uma variável. Em algumas linguagens, notadamente em C, ponteiros são relativamente irrestritos. Em outras linguagens, ponteiros são disfarçados como ‘‘referências’’ e não há muito que se possa fazer com eles a não ser passá-los de um lado para o outro. Go assume uma posição, de certo modo, intermediária. Os ponteiros são explicitamente visíveis. O operador & fornece o endereço de uma variável, e o operador * recupera a variável à qual o ponteiro se refere, mas não há aritmética com ponteiros.

## Métodos e interfaces

Um método é uma função associada a um tipo nomeado; Go é incomum no sentido em que métodos podem ser associados a quase todo tipo nomeado. Os métodos serão discutidos no capítulo 6. As interfaces são tipos abstratos que nos permitem tratar tipos concretos diferentes da mesma maneira, com base nos métodos que eles têm, e não no modo como são representados ou implementados.

## Pacotes

Go vem com uma biblioteca-padrão extensa de pacotes úteis, e a comunidade Go vem criando e compartilhando muitos outros. Programação geralmente tem mais a ver com o uso de pacotes existentes que com a escrita de um código original por conta própria. Ao longo do livro destacaremos umas duas dúzias dos pacotes padrões mais importantes, mas há muitos outros que não teremos espaço para mencionar, e não podemos oferecer nada remotamente parecido com uma referência completa a qualquer pacote.

## Comandos no Terminal
```bash
$ go
$ go help get
$ go version
$ godoc -http=:6060
$ go env
$ go doc cmd/vet
$ go vet comandos.go
$ go build comandos.go
$ ./comandos
$ go run comandos.go
# Mac/Linux
$ ls ~/go/src/github.com
# Windows
$ dir ~/go/src/github.com
$ go get -u github.com/go-sql-driver/mysql
```

## Constantes e Variáveis

```go
import (
	"fmt"
	m "math" // alias
)

const PI float64 = 3.1415
var raio = 3.2 // tipo (float64) inferido pelo compilador

// forma reduzida de criar uma var
area := PI * m.Pow(raio, 2)

const (
    a = 1
    b = 2
)

var e, f bool = true, false

g, h, i := 2, false, "epa!"
```