<?php

for ($i = 0; $i < 20; $i++) {
    if ($i >= 5 && $i <= 10) {
        continue;
    }

    if ($i === 15) {
        break;
    }

    echo $i . "\n";
}
