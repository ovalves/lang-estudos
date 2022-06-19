<?php
/*
|--------------------------------------------------------------------------
| Realizando type casting de variáveis
|--------------------------------------------------------------------------
*/
// Cast para int
$paraInt = (int) '1';
var_dump($paraInt); // int(1)

// Cast para String
$paraString = (string) 1;
var_dump($paraString); // string(1) "1"

// Cast para float
$paraFloat = (float) '1';
var_dump($paraFloat); // float(1)

// Cast para Boolean
$paraBoolean = (bool) '1';
var_dump($paraBoolean); // bool(true)
