package stdin

import (
	"fmt"
)

func Read_std_in() string {
	var command string
	fmt.Scanf("%s", &command)

	return command
}
