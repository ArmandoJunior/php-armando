<?php

namespace Strategy;

class Inter implements StrategyInterface
{
    const TAX = 1.072;

    public function getTaxFee(Order $order): float
    {
        return $order->getTotal() * self::TAX;
    }
}