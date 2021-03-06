<?php
namespace Sparav\Order\Enums;

use BenSampo\Enum\Enum;

final class OrderCodeResponse extends Enum
{
    const OrderOk = "100";
    const OrderCreationErrorFound = "1";
    const OrderCreationOk = "0";
    const OrderPending = "10101";
}
