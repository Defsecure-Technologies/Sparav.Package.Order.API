<?php
namespace Sparav\Order;

use Illuminate\Support\Facades\Http;
use Sparav\Order\Models\CreateOrder;

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
     * Returns a single order with their subscription data etc.
     * @param int $order_id
     * @return null
     */
    public function order(int $order_id) {
        $response = Http::timeout(30)
            ->withBasicAuth(env('SPARAV_ORDER_API_AUTH_USERNAME'), env('SPARAV_ORDER_API_AUTH_PASSWORD'))
            ->post("https://sparavorderapiprod.azurewebsites.net/api/v1/order/{$order_id}");
        return $response;
    }

    /**
     * @param int $order_id
     * @return \Illuminate\Http\Client\Response
     */
    public function orderforcerebill(int $order_id) {
        $response = Http::timeout(15)
            ->withBasicAuth(env('SPARAV_ORDER_API_AUTH_USERNAME'), env('SPARAV_ORDER_API_AUTH_PASSWORD'))
            ->post("https://sparavorderapiprod.azurewebsites.net/api/v1/order/forcebill", [
                'order_id' => $order_id
            ]);
        return $response;
    }

}
