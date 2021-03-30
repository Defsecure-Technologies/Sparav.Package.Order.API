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

    /**
     * @OA\Property(type="string")
     */
    public ?string $AFID;

    /**
     * @OA\Property(type="string")
     */
    public ?string $SID;

    /**
     * @OA\Property(type="string")
     */
    public ?string $AFFID;

    /**
     * @OA\Property(type="flow_id")
     */
    public ?int $flow_id;

    /**
     * @OA\Property(type="cavv")
     */
    public ?string $cavv;

    /**
     * @OA\Property(type="eci")
     */
    public ?string $eci;

    /**
     * @OA\Property(type="cavv_algorithm")
     */
    public ?string $cavv_algorithm;

    /**
     * @OA\Property(type="three_d_redirect")
     */
    public ?string $three_d_redirect;

}
