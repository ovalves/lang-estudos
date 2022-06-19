<?php

require 'vendor/autoload.php';

use Exemplos\Log\LoggerTXT;

$log = new LoggerTXT(__DIR__.'./log.txt');
$log->write('Testando a classe de log');
