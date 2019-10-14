<?php
require_once '../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;

echo Hello::talk();

echo SayHello::world();