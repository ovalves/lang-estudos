<?php

$format = "Y-m-d H:i:s";
echo DateTime::createFromFormat($format, "2022-06-22 20:10:00")->format($format); // 2022-06-22 20:10:00
