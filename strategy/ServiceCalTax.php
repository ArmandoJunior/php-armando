<?php

namespace Strategy;

use Strategy\Order;
use Strategy\StrategyInterface;

class ServiceCalTax
{
    private StrategyInterface $banco;

    public function __construct(StrategyInterface $banco)
    {
        $this->banco = $banco;
    }

    public function taxFeeCalculator(Order $order)
    {
        return $this->banco->getTaxFee($order);
    }
}