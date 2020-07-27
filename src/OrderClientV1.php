<?php
namespace Sparav\Order;

use Illuminate\Support\Facades\Http;

class OrderClientV1
{

    /**
     * @param CreateOrder $order
     * @return mixed
     */
    public function create(CreateOrder $order)
    {
        $response = Http::timeout(30)
            ->withBasicAuth(env('SPARAV_ORDER_API_AUTH_USERNAME'), env('SPARAV_ORDER_API_AUTH_PASSWORD'))
            ->post('https://sparavorderapiprod.azurewebsites.net/api/v1/order', (array) $order);
        return $response;
    }

    /**
     * Does nothing.
     * @param int $order_id
     * @return null
     */
    public function get(int $order_id) {
        return null;
    }

}
