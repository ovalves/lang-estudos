package main

import (
	"fmt"
	"sipgo/core"
	"sipgo/stdin"
)

func init() {
	fmt.Println("SIPGO 0.0.1")
	fmt.Println("Type help, copyright, credits or license for more information.")
	fmt.Println(">>>")
}

func main() {
	for {
		stdin := stdin.Read_std_in()
		fmt.Println("calc> ", stdin)

		interpreter := core.NewInterpreter(stdin)
		result := interpreter.Expression()
		fmt.Println(result)
	}
}
