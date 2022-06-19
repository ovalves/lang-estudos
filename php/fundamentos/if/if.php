<?php

$idade = 20;
$crianca = 12;
$maior = 18;
$idoso = 65;

if ($idade < $crianca) {
    echo "Criança";
} elseif ($idade < $maior) {
    echo "Adolescente";
} elseif ($idade < $idoso) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo ($idade < $maior) ? ": Menor de Idade" : ": Maior de Idade";
