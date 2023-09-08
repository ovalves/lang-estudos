# Date and time


### Format
O método time.Time.Format oferece uma maneira de formatar informações de data e hora por meio de exemplo.

O Pacote time define templates para muitos formatos padrões de horário, como time.RFC1123.

```go
time.Now().Format("15:04:05\n")
```