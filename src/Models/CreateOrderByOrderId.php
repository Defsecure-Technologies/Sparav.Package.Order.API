<?php

namespace Sparav\Order\Models;

class CreateOrderByOrderId
{

    /**
     * @OA\Property(type="integer")
     */
    public int $order_id;

    /**
     * @OA\Property(type="string")
     */
    public string $campaign_id;

    /**
     * @OA\Property(schema="Offer")
     */
    public array $offers;

}
