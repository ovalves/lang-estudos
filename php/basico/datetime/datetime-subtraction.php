<?php

$then = DateTime::createFromFormat("Y-m-d H:i:s", "2021-06-21 20:10:00");
$now = new DateTime("now");
echo "Diferença de dias: " . $now->diff($then)->days; // Diferença de dias: 365
