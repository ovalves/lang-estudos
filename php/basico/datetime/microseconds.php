<?php

list($frac, $sec) = explode(" ", microtime());
echo $frac * 1000 * 1000; // 633066
