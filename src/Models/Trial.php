<?php


namespace Sparav\Order\Models;


class Trial
{
    public int $product_id;

    public function __construct(int $product_id)
    {
        $this->product_id = $product_id;
    }

}
