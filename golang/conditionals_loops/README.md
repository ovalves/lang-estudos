# Conditionals and Loops

## if/else
```go
if condition {
    // statements
} else {
    //statements
}
```

```go
if condition {
    // statements
} else if condtion {
    // statements
} else if condition {
    // statements
} else {
    // statements
}
```

## switch

```go
switch variable {
    case value1:
        // statements
    case value2:
        // statements
}
```

## Loops
```go
for i := 0; i < 5; i++ {
    fmt.Println(i)
}
```

```go
name := "GOLANG"
for i, s := range name{
    fmt.Printf("%d -> %c\n",i, s)
}
```

## while loop
```go
for condition {
    // statements
}
```