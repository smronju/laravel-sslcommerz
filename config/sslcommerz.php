<?php

declare(strict_types=1);

// config for smronju/laravel-sslcommerz

return [
    /**
     * Enable/Disable Sandbox mode
     */
    'sandbox' => env('SSLCOMMERZ_SANDBOX', true),

    /**
     * The API credentials given from SSLCommerz
     */
    'store' => [
        'id' => env('SSLCOMMERZ_STORE_ID'),
        'password' => env('SSLCOMMERZ_STORE_PASSWORD'),
        'currency' => env('SSLCOMMERZ_STORE_CURRENCY', 'BDT'),
    ],

    /**
     * Route names for success/failure/cancel
     */
    'route' => [
        'success' => env('SSLCOMMERZ_ROUTE_SUCCESS', 'sslcommerz.success'),
        'failure' => env('SSLCOMMERZ_ROUTE_FAILURE', 'sslcommerz.failure'),
        'cancel' => env('SSLCOMMERZ_ROUTE_CANCEL', 'sslcommerz.cancel'),
        'ipn' => env('SSLCOMMERZ_ROUTE_IPN', 'sslcommerz.ipn'),
    ],

    /**
     * Product profile required from SSLC
     * By default it is "general"
     *
     * AVAILABLE PROFILES
     *  general
     *  physical-goods
     *  non-physical-goods
     *  airline-tickets
     *  travel-vertical
     *  telecom-vertical
     */
    'product_profile' => 'general',
];
