<?php


namespace Sparav\Order;


use Illuminate\Support\Facades\Http;

class ThreeDClientV1
{
    /**
     * @return \Illuminate\Http\Client\Response
     */
    public function redirect(int $order_id): \Illuminate\Http\Client\Response
    {
        $response = Http::timeout(30)
            ->withBasicAuth(env('SPARAV_ORDER_API_AUTH_USERNAME'), env('SPARAV_ORDER_API_AUTH_PASSWORD'))
            ->get("https://sparavorderapiprod.azurewebsites.net/api/v1/threed/redirect/{$order_id}");
        return $response;
    }

}
