<?php

use Siarhei\Phpgrpcclient\GreetingClient;

require_once 'vendor/autoload.php';

$client = new GreetingClient();

$client->greeting();
