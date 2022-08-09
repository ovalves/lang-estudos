<?php

$date = new DateTime();

echo "Ano: " . (int)$date->format("Y") . PHP_EOL;
echo "Mês: " . (int)$date->format("m") . PHP_EOL;
echo "Dia: " . (int)$date->format("d") . PHP_EOL;
echo "Hora: " . (int)$date->format("H") . PHP_EOL;
echo "Minuto: " . (int)$date->format("i") . PHP_EOL;
echo "Segundo: " . (int)$date->format("s") . PHP_EOL;
