<?php


namespace Sparav\Order\Models;

/**
 * @OA\Schema(
 *   schema="UpdateCustomerIdOrder",
 *   type="object"
 * )
 */
class UpdateCustomerIdOrder
{

    /**
     * @OA\Property(type="string")
     */
    public string $sticky_order_id;

    /**
     * @OA\Property(type="integer")
     */
    public int $customer_id;

    public function __construct(string  $sticky_order_id, int $customer_id)
    {
        $this->customer_id = $customer_id;
        $this->sticky_order_id = $sticky_order_id;
    }

}

