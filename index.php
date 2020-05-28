<?php
require 'vendor/autoload.php';

use \classes\matematica\Basica;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$m = new Basica();

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('system.log', Logger::WARNING));

// add records to the log
$log->warning($m->somar(15,20));
$log->error($m->somar(15,20));