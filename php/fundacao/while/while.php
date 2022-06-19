<?php

$condicao = true;

while ($condicao) {
    $numero = rand(1, 10);

    if ($numero === 7) {
        echo "Parar: 7";
        $condicao = false;
        break;
    }

    echo "Continuar: {$numero} \n";
}
