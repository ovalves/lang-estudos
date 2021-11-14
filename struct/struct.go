package main

import (
	"fmt"
)

type MinStack struct {
	matrix map[int]int
	matrixPosition int
}

// Método Construtor da struct: Retorna a struct e seus atributos
// Declarando e atribuindo valores usando os nomes dos campos
func Constructor() MinStack {
    return MinStack{
		matrix: make(map[int]int),
		matrixPosition:	-1,
	}
}


func (this *MinStack) Push(val int)  {
	this.matrixPosition++
	this.matrix[this.matrixPosition] = val
}


func (this *MinStack) Pop()  {
	delete(this.matrix, this.matrixPosition)
	this.matrixPosition--;
}


func (this *MinStack) Top() int {
	return this.matrix[this.matrixPosition];
}


func (this *MinStack) GetMin() int {
	min := this.matrix[0]
	for _, v := range this.matrix {
		if (v < min) {
			min = v
		}
	}

	return min
}


func main() {
	var stack = Constructor()

	stack.Push(-2);
	stack.Push(0);
	stack.Push(-3);
	fmt.Printf("min %v \n", stack.GetMin()) // return -3
	stack.Pop();
	fmt.Printf("top %v \n", stack.Top())    // return 0
	fmt.Printf("min %v \n", stack.GetMin()) // return -2
}