<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Billing route
    |--------------------------------------------------------------------------
    |
    | The route to the billing page where the SaaS Billing components are.
    |
    */

    'billing_route' => '/billing',

    /*
    |--------------------------------------------------------------------------
    | Plans
    |--------------------------------------------------------------------------
    |
    | These plans should represent the plans you have defined in Stripe.
    |
    */

    'plans' => [
        [
            'id'       => 'product-9-monthly',
            'name'     => 'Freelancer',
            'price'    => 9,
            'interval' => 'monthly',
            'features' => ['1 user'],
        ],
        [
            'id'       => 'product-29-monthly',
            'name'     => 'Small Team',
            'price'    => 29,
            'interval' => 'monthly',
            'features' => ['5 users'],
        ],
        [
            'id'       => 'product-59-monthly',
            'name'     => 'Big Team',
            'price'    => 59,
            'interval' => 'monthly',
            'features' => ['15 users'],
        ],
    ],
];