# PHP: Hypertext Preprocessor

A popular general-purpose scripting language that is especially suited to web development.

Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.

### versão usada
```php
PHP 8.0.2
```

### show version
```php
php --version
```

### interpreter
```php
php -f foo.php
```

### repl
```php
php -a

```
### command line program
```php
php -r 'echo "hi!\n";'
```

### block delimiters
```php
{}
```

### statement separator
```php
;
```

### end-of-line comment
```php
// comment
# comment
```

### multiple line comment
```php
/* comment line
another line */
```

### true and false
```php
TRUE FALSE # case insensitive
```

### Avaliam para Falso
```php
FALSE NULL 0 0.0 "" "0" []
```

### logical operators
```php
&& || !
lower precedence:
and or xor
```

### relational operators
```php
== != or <> > < >= <=
no conversion: === !==
```

### float overflow
```php
INF
```

### bit operators
```php
<< >> & | ^ ~
```

### binary, octal, and hex literals
```php
0b101010
052
0x2a
```

### webserver
```php
/* comment line
php -S localhost:8000
```

### Tópicos
* **Fundamentos**
  * [constantes](fundamentos/constantes/constantes.php)
  * [data](fundamentos/data)
  * [for](fundamentos/for/for.php)
  * [foreach](fundamentos/foreach/foreach.php)
  * [funcoes](fundamentos/funcoes)
  * [http](fundamentos/http)
  * [if](fundamentos/if/if.php)
  * [ternário](fundamentos/if/ternario.php)
  * [include](fundamentos/include)
  * [Aritméticos](fundamentos/arithmetic)
    * [Aritméticos - min e max](fundamentos/arithmetic/min-max.php)
    * [Operadores Aritméticos](fundamentos/arithmetic/operators.php)
    * [Divisão de integer e float](fundamentos/arithmetic/float-integer-division.php)
    * [Expressão exponencial](fundamentos/arithmetic/exponential.php)
    * [Raiz quadrada](fundamentos/arithmetic/raiz-quadrada.php)
    * [truncamento de ponto flutuante](fundamentos/arithmetic/float-truncation.php)
    * [valor absoluto](fundamentos/arithmetic/absolute-value.php)
    * [números randômicos](fundamentos/arithmetic/random-number.php)
  * [session](fundamentos/session)
  * [strings](fundamentos/strings)
  * [switch](fundamentos/switch/switch.php)
  * [variaveis](fundamentos/variaveis)
    * [Variáveis Globais](fundamentos/variaveis/global-vars.php)
    * [Concatenando Variáveis](fundamentos/variaveis/concat.php)
    * [Incrementando Variáveis](fundamentos/variaveis/increment.php)
    * [Null Test](fundamentos/variaveis/null-test.php)
    * [Variáveis por referência](fundamentos/variaveis/reference.php)
    * [Type Casting - Variáveis](fundamentos/variaveis/type-casting.php)
    * [Removendo Variáveis](fundamentos/variaveis/unset.php)
  * [while](fundamentos/while)