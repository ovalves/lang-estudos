<?php
/*
|--------------------------------------------------------------------------
| Retorna os valores minimos de maximos de uma coleção
|
| min(mixed $value, array ...$values): mixed { }
| max(mixed $value, array ...$values): mixed { }
|--------------------------------------------------------------------------
*/
echo "MIN: " . min(1, 2, 3) . PHP_EOL;
echo "MAX: " . max(1, 2, 3) . PHP_EOL;

$numbers = [7, 8, 9];
echo "MIN: " . min($numbers) . PHP_EOL;
echo "MAX: " . max($numbers) . PHP_EOL;
