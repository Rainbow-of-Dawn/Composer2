<?php

require_once __DIR__ . '/../vendor/autoload.php';

$heyComp = new App\Wcs\SayHello();

echo $heyComp->world();