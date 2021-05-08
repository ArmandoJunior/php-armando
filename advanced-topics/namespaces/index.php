<?php

require_once __DIR__ . '/vendor/autoload.php';

use Rych\Random\Random;

echo (new Random())->getRandomInteger(1, 100) . PHP_EOL;