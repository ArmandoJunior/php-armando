<?php

require_once 'vendor/autoload.php';

use Strategy\Order;

$banks = ['Inter', 'Bradesco', 'Itau'];
$class = "Strategy\\" . $banks[0];
$bank = new $class();

$total =  (float) 10000;
$order = new Order($total);
$txFee = new Strategy\ServiceCalTax($bank);

echo "a Taxa solicitada é: R$ " . number_format($txFee->taxFeeCalculator($order), 2) . PHP_EOL;
