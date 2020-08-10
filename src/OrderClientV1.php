<?php
namespace Sparav\Order;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Sparav\Order\Models\CreateOrder;
use Sparav\Order\Models\CreateOrderByOrderId;
use Sparav\Order\Models\OrderExistsOrderFlow;
use Sparav\Order\Models\SubscriptionOrderUpdate;

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
            ->get("https://sparavorderapiprod.azurewebsites.net/api/v1/order/{$order_id}");
        return $response;
    }

    /**
     * @param CreateOrderByOrderId $createOrderByOrderId
     * @return Response
     */
    public function createorderbyorderid(CreateOrderByOrderId $createOrderByOrderId) {
        $response = Http::timeout(30)
            ->withBasicAuth(env('SPARAV_ORDER_API_AUTH_USERNAME'), env('SPARAV_ORDER_API_AUTH_PASSWORD'))
            ->post('https://sparavorderapiprod.azurewebsites.net/api/v1/order/byorderid', (array) $createOrderByOrderId);
        return $response;
    }

    /**
     * @param OrderExistsOrderFlow $orderExistsOrderFlow
     * @return Response
     */
    public function orderflowExists(OrderExistsOrderFlow $orderExistsOrderFlow) {
        $response = Http::timeout(30)
            ->withBasicAuth(env('SPARAV_ORDER_API_AUTH_USERNAME'), env('SPARAV_ORDER_API_AUTH_PASSWORD'))
            ->post('https://sparavorderapiprod.azurewebsites.net/api/v1/order/orderflowexists', (array) $orderExistsOrderFlow);
        return $response;
    }

    /**
     * @param array $data
     * @return Response
     */
    public function orderforcerebill(array $data) {
        $response = Http::timeout(15)
            ->withBasicAuth(env('SPARAV_ORDER_API_AUTH_USERNAME'), env('SPARAV_ORDER_API_AUTH_PASSWORD'))
            ->post("https://sparavorderapiprod.azurewebsites.net/api/v1/order/forcebill", [
                'order_id' => $data['order_id'],
                'customer_id' => $data['customer_id'],
                'flow_id' => $data['flow_id']
            ]);
        return $response;
    }


    /**
     * Updates the order by changing a subscription product with another.
     * @param SubscriptionOrderUpdate $subscriptionOrderUpdate
     * @return Response
     */
    public function subscriptionorderupdate(SubscriptionOrderUpdate $subscriptionOrderUpdate) {
        $response = Http::timeout(15)
            ->withBasicAuth(env('SPARAV_ORDER_API_AUTH_USERNAME'), env('SPARAV_ORDER_API_AUTH_PASSWORD'))
            ->put("https://sparavorderapiprod.azurewebsites.net/api/v1/order/subscriptionorderupdate", (array) $subscriptionOrderUpdate);
        return $response;
    }

}
