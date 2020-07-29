<?php


namespace Sparav\Order\Models;


class Offer
{

    public int $id; // offer_id and ID is the same, but sticky is so fucked, they call it offer_id somewhere and id other..
    public int $offer_id; // same as ABOVE!

    public int $product_id;
    public int $billing_model_id;
    public int $quantity;
    public Trial $trial;

    public function __construct(int $id, int $product_id, int $billing_model_id, Trial $trial, int $quantity = 1)
    {
        $this->id = $id;
        $this->offer_id = $this->id;

        $this->product_id = $product_id;
        $this->billing_model_id = $billing_model_id;
        $this->trial = $trial;
        $this->quantity = $quantity;
    }

}
