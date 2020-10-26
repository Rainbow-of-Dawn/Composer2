<?php

require_once __DIR__ . '/../vendor/autoload.php';

$heyComp = new \HelloWorld\SayHello;
echo $heyComp->world();
