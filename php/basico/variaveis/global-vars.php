<?php
/*
|--------------------------------------------------------------------------
| Definindo uma variável global
|--------------------------------------------------------------------------
*/
$globalVar = "TEST GLOBAL VAR";

/*
|--------------------------------------------------------------------------
| Utilizando uma variável global dentro uma função
|--------------------------------------------------------------------------
*/
function testeGlobal()
{
    global $globalVar;
    echo $globalVar . "\n";
};
testeGlobal();
