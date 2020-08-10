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

}

