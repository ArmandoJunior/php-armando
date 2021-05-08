<?php

namespace Strategy;

class Order
{
    private $total;

    public function __construct($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }
}