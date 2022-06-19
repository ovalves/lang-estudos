<?php

$word = "amet";

$s = <<<EOF
lorem ipsum
dolor sit $word
EOF;

/*
lorem ipsum
dolor sit amet
*/
echo $s . PHP_EOL;
