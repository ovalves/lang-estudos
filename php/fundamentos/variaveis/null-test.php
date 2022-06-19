<?php
/*
|--------------------------------------------------------------------------
| Testando uma variável NULL
|--------------------------------------------------------------------------
*/
$x = 'Valor setado';
var_dump(is_null($x));
if (isset($x)) {
    echo 'Não nulo';
} else {
    echo 'nulo';
}
