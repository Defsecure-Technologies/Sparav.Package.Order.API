<?php


namespace Sparav\Order\Models;


class PaymentAuthorize
{

    public string $ipAddress;

    public string $billingAddress1;

    public string $billingZip;

    public string $billingCity;

    public string $billingState;

    public string $billingCountry;

    public string $phone;

    public string $email;

    public string $creditCardNumber;

    public string $expirationDate;

    public string $CVV;

    /**
     * PaymentAuthorize constructor.
     * @param string $ipAddress
     * @param string $billingAddress1
     * @param string $billingZip
     * @param string $billingCity
     * @param string $billingState
     * @param string $billingCountry
     * @param string $phone
     * @param string $email
     * @param string $creditCardNumber
     * @param string $expirationDate
     * @param string $CVV
     */
    public function __construct(string $ipAddress, string $billingAddress1, string $billingZip, string $billingCity, string $billingState, string $billingCountry, string $phone, string $email, string $creditCardNumber, string $expirationDate, string $CVV)
    {
        $this->ipAddress = $ipAddress;
        $this->billingAddress1 = $billingAddress1;
        $this->billingZip = $billingZip;
        $this->billingCity = $billingCity;
        $this->billingState = $billingState;
        $this->billingCountry = $billingCountry;
        $this->phone = $phone;
        $this->email = $email;
        $this->creditCardNumber = $creditCardNumber;
        $this->expirationDate = $expirationDate;
        $this->CVV = $CVV;
    }


}
