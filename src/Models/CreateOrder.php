<?php


namespace Sparav\Order\Models;


/**
 * @OA\Schema(
 *   schema="CreateOrder",
 *   type="object"
 * )
 */
class CreateOrder
{

    /**
     * @OA\Property(type="string")
     */
    public string $firstName;
    /**
     * @OA\Property(type="string")
     */
    public string $lastName;
    /**
     * @OA\Property(type="string")
     */
    public string $shippingAddress1;

    /**
     * @OA\Property(type="string")
     */
    public string $shippingCity;

    /**
     * @OA\Property(type="string")
     */
    public string $shippingState;

    /**
     * @OA\Property(type="string")
     */
    public string $shippingCountry; // ALPHA 2

    /**
     * @OA\Property(type="string")
     */
    public string $shippingZip;

    /**
     * @OA\Property(type="string")
     */
    public string $phone;

    /**
     * @OA\Property(type="string")
     */
    public string $email;

    /**
     * @OA\Property(type="string")
     */
    public ?string $creditCardType;

    /**
     * @OA\Property(type="string")
     */
    public ?string $creditCardNumber;

    /**
     * @OA\Property(type="string")
     */
    public ?string $expirationDate;

    /**
     * @OA\Property(type="string")
     */
    public ?string $CVV;

    /**
     * @OA\Property(type="string")
     */
    public string $tranType = "Sale";

    /**
     * @OA\Property(type="string")
     */
    public string $shippingId;

    /**
     * @OA\Property(type="string")
     */
    public string $ipAddress;

    /**
     * @OA\Property(type="string")
     */
    public string $billingSameAsShipping = "YES";

    /**
     * @OA\Property(type="string")
     */
    public string $campaignId;

    /**
     * @OA\Property(type="string")
     */
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
     * @OA\Property(type="three_d_redirect_url")
     */
    public ?string $three_d_redirect_url;

    /**
     * @OA\Property(type="wallet_token")
     */
    public ?string $wallet_token;

}


