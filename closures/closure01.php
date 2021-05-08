<?php

$var = "closure";
$func = function (string $string) { echo "{$string} called\n"; };
$func($var);

$var2 = "closure by use";
$func2 = function () use ($var2) {echo "{$var2} called\n"; };
$func2();