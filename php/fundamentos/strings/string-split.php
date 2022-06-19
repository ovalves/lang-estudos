<?php

/*
array(3) {
  [0]=>
  string(2) "do"
  [1]=>
  string(2) "re"
  [2]=>
  string(2) "mi"
}
*/
var_dump(explode(" ", "do re mi")) . PHP_EOL; # ["do", "re", "mi"]:

/*
array(3) {
  [0]=>
  string(2) "do"
  [1]=>
  string(2) "re"
  [2]=>
  string(2) "mi"
}
*/
var_dump(preg_split('/\s+/', "do re mi")) . PHP_EOL; # ["do", "re", "mi"]:

/*
array(2) {
  [0]=>
  string(2) "do"
  [1]=>
  string(8) "re mi fa"
}
*/
var_dump(preg_split('/\s+/', "do re mi fa", 2)) . PHP_EOL;
