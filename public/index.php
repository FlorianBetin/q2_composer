<?php

require '../vendor/autoload.php';

use App\Hello;

$message = new Hello;
$message->setHello('Hello World');
echo $message->talk();

?>