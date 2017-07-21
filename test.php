<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$fuck = new Bmonteirog\FOAAS\Client;

echo $fuck->version();
