package core

type Token struct {
	token_type  string
	token_value string
}

func NewToken() *Token {
	return &Token{token_type: "", token_value: ""}
}
