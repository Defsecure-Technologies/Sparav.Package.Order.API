<?php


namespace Sparav\Order\Enums;


use BenSampo\Enum\Enum;

class OrderStatusType  extends Enum
{

    const Approved = 2;
    const Refunded = 6;
    const Declined = 7;
    const Shipped = 8;
    const Pending = 11;

}
