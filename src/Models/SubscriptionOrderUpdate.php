<?php


namespace Sparav\Order\Models;


/**
 * @OA\Schema(
 *   schema="SubscriptionOrderUpdate",
 *   type="object"
 * )
 */
class SubscriptionOrderUpdate
{

    /**
     * @OA\Property(type="integer")
     */
    public int $order_id;

    /**
     * @OA\Property(type="integer")
     */
    public int $product_id;

    /**
     * @OA\Property(type="integer")
     */
    public int $new_recurring_product_id;

    /**
     * @OA\Property(type="integer")
     */
    public int $billing_model_id;


    public function __construct(int $order_id, int $product_id, string $new_recurring_product_id, int $billing_model_id)
    {
        $this->order_id = $order_id;
        $this->product_id = $product_id;
        $this->new_recurring_product_id = $new_recurring_product_id;
        $this->billing_model_id = $billing_model_id;
    }

}
