<?php


namespace Sparav\Order\Models;

/**
 * @OA\Schema(
 *   schema="UpdateOrderCard",
 *   type="object"
 * )
 */
class UpdateOrderCard
{
    /**
     * @OA\Property(type="string")
     */
    public string $order_id;

    /**
     * @OA\Property(type="string")
     */
    public string $cc_number;

    /**
     * @OA\Property(type="string")
     */
    public string $cc_expiration_date;

    /**
     * @OA\Property(type="string")
     */
    public string $cc_cvv;

    public function __construct(string $order_id, string $cc_number, string $cc_expiration_date, string $cc_cvv)
    {
        $this->order_id = $order_id;
        $this->cc_number = $cc_number;
        $this->cc_expiration_date = $cc_expiration_date;
        $this->cc_cvv = $cc_cvv;
    }
}
