# golang-estudos

[![MIT License](https://img.shields.io/apm/l/atomic-design-ui.svg?)](https://github.com/ovalves/golang-estudos/blob/main/LICENSE)
[![PR's Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat)](http://makeapullrequest.com)

Este repositório contém estudos e exemplos sobre a linguagem de progração go.

🚀 Introdução
=================

### Resumindo
> Go é uma linguagem de programação criada pela Google. É uma linguagem compilada e focada em produtividade e programação concorrente.

- [Instalando](Instalando/README.md)
- [Configurando](configurando.md)

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