<?php

namespace Strategy;

interface StrategyInterface
{
    public function getTaxFee(\Strategy\Order $order): float;
}