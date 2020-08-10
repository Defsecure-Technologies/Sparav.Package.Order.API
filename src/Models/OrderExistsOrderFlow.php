<?php


namespace Sparav\Order\Models;


/**
 * @OA\Schema(
 *   schema="OrderExistsOrderFlow",
 *   type="object"
 * )
 */
class OrderExistsOrderFlow
{


    /**
     * @OA\Property(type="integer")
     */
    public int $customer_id;


    /**
     * @OA\Property(type="integer")
     */
    public int $flow_id;

}
