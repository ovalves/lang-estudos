<?php
/*
|--------------------------------------------------------------------------
| Divisão de valores INTEIROS
|--------------------------------------------------------------------------
*/
$x = 22;
$y = 7;
echo "X / Y ({$x} / {$y}) = " . (int)($x / $y) . " Divisão de INTEIROS ". PHP_EOL; # X / Y (22 / 7) = 3 Divisão de inteiro

/*
|--------------------------------------------------------------------------
| Divisão de valores INTEIROS por ZERO
|--------------------------------------------------------------------------
*/
$x = 22;
$y = 0;
echo "X / Y ({$x} / {$y}) = " . (int)($x / $y) . " Divisão de INTEIROS ". PHP_EOL; # PHP Fatal error:  Uncaught DivisionByZeroError: Division by zero in

/*
|--------------------------------------------------------------------------
| Divisão de valores FLOAT
|--------------------------------------------------------------------------
*/
$x = 22;
$y = 7;
echo "X / Y ({$x} / {$y}) = " . ($x / $y) . " Divisão de FLOAT ". PHP_EOL; # X / Y (22 / 7) = 3.1428571428571 Divisão de FLOAT

/*
|--------------------------------------------------------------------------
| Divisão de valores FLOAT por ZERO
|--------------------------------------------------------------------------
*/
$x = 22;
$y = 0;
echo "X / Y ({$x} / {$y}) = " . ($x / $y) . " Divisão de FLOAT ". PHP_EOL; # PHP Fatal error:  Uncaught DivisionByZeroError: Division by zero
