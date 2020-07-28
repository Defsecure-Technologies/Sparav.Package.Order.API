<?php
namespace Sparav\Order\Models;

class CreateOrder
{

    public string $firstName;
    public string $lastName;
    public string $shippingAddress1;
    public string $shippingCity;
    public string $shippingState;
    public string $shippingCountry; // ALPHA 2
    public string $shippingZip;
    public string $phone;
    public string $email;
    public string $creditCardType;
    public string $creditCardNumber;
    public string $creditcardexpirationDate;
    public string $creditcardCVV;
    public string $tranType = "Sale";
    public string $shippingId;
    public string $ipAddress;
    public bool $billingSameAsShipping = true;

    public string $campaignId;

    public array $offers;

}
