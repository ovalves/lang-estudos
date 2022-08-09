<?php

# ASCII only:
echo ucfirst(strtolower("lorem")) . PHP_EOL; // Lorem
echo ucwords(strtolower("lorem ipsum")) . PHP_EOL; // Lorem Ipsum

# Unicode title case:
echo mb_convert_case("lorem ipsum", MB_CASE_TITLE) . PHP_EOL; // Lorem Ipsum
