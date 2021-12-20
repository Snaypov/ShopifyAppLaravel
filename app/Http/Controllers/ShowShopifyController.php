<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPShopify\ShopifySDK;

class ShowShopifyController extends Controller
{
    public function __construct()
    {
        $config = array(
            'ShopUrl' => 'https://store123laravel.myshopify.com/',
            'ApiKey' => env('API_KEY'),
            'Password' => env('API_PASSWORD'),
        );

        ShopifySDK::config($config);
    }

    public function show(){
        $shopify = new ShopifySDK();

        dd($shopify->Product->get());
    }
}

