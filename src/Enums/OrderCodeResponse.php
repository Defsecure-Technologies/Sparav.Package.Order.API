<?php
namespace Sparav\Order;

use BenSampo\Enum\Enum;

final class OrderCodeResponse extends Enum
{
    const OrderOk = "100";
    const OrderCreationErrorFound = "1";
    const OrderCreationOk = "0";
}
