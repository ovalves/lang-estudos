package core

import (
	"fmt"
)

type Interpreter struct {
	stdin         string
	pos           int
	current_token Token
}

func NewInterpreter(stdin string) *Interpreter {
	return &Interpreter{
		stdin:         stdin,
		pos:           0,
		current_token: Token{},
	}
}

func (interpreter *Interpreter) Error() {
	fmt.Println("Error parsing input")
}

func (interpreter *Interpreter) Expression() {
	fmt.Println("Error parsing input")
}
