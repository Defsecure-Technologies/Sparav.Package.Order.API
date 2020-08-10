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

    /**
     * OrderExistsOrderFlow constructor.
     * @param int $customer_id
     * @param int $flow_id
     */
    public function __construct(int $customer_id, int $flow_id)
    {
        $this->customer_id = $customer_id;
        $this->flow_id = $flow_id;
    }

}
