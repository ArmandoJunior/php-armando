<?php

namespace Strategy;

class Bradesco implements StrategyInterface
{
    const FEE = 1.097;

    public function getTaxFee(Order $order): float
    {
        return $order->getTotal() * self::FEE;
    }
}