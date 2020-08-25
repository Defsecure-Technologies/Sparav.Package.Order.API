<?php


namespace Sparav\Order;


use Illuminate\Support\Facades\Http;
use Sparav\Order\Models\PaymentAuthorize;

class PaymentClientV1
{

    /**
     * Returns orders with their subscription data etc.
     * @param PaymentAuthorize $paymentAuthorize
     * @return mixed
     */
    public function authorize(PaymentAuthorize $paymentAuthorize) {
        $response = Http::timeout(30)
            ->withBasicAuth(env('SPARAV_ORDER_API_AUTH_USERNAME'), env('SPARAV_ORDER_API_AUTH_PASSWORD'))
            ->post('https://sparavorderapiprod.azurewebsites.net/api/v1/payment/authorize', (array) $paymentAuthorize);
        return $response;
    }

}
