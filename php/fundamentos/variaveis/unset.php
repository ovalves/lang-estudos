<?php
/*
|--------------------------------------------------------------------------
| Removendo variáveis
|--------------------------------------------------------------------------
*/
$definida = "Variável definida";
echo $definida . "\n";

// Remove uma determinada variável
unset($definida);
echo $definida; // PHP Warning:  Undefined variable $definida in ...
