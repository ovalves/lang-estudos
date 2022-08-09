<?php

date_default_timezone_set("America/Sao_Paulo");
echo "America/Sao_Paulo: " . date("Y-m-d H:i:s", strtotime("now")) . PHP_EOL; // America/Sao_Paulo: 2022-06-21 20:09:18

date_default_timezone_set("America/Los_Angeles");
echo "America/Los_Angeles: " . date("Y-m-d H:i:s", strtotime("now")) . PHP_EOL; // America/Los_Angeles: 2022-06-21 16:09:18
