<?php

$s = "lorem";
$delta = strlen($s) - mb_strlen($s);

echo str_pad($s, 10 + $delta) . PHP_EOL;
echo str_pad($s, 10 + $delta, "*", STR_PAD_LEFT) . PHP_EOL;
echo str_pad($s, 10 + $delta, "*", STR_PAD_BOTH) . PHP_EOL;
