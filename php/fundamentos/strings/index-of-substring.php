<?php

# returns FALSE if not found:

// Find the position of the first occurrence of a substring in a string
echo strpos("do re re", "re")     . PHP_EOL; // 3
echo mb_strpos("do re re", "re")  . PHP_EOL; // 3

// Find the position of the last occurrence of a substring in a string
echo strrpos("do re re", "re")    . PHP_EOL; // 6
echo mb_strrpos("do re re", "re") . PHP_EOL; // 6
