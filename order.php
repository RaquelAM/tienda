<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://sitioarevision.com/raquel/tiendaPrueba',
    'ck_d10aff34cee267042c884a64db3cb930cd14d279',
    'cs_73de816b143aabeae4caac25aa39ee42019b207c',
    [
        'wp_api' => true,
        'version' => 'wc/v2'
    ]
);


//$_POST['data']);
//$data = json_decode();


$data = [
    'payment_method' => 'bacs',
    'payment_method_title' => 'Direct Bank Transfer',
    'set_paid' => true,
    'billing' => [
        'first_name' => 'Raquel',
        'last_name' => 'Doe',
        'address_1' => '969 Market',
        'address_2' => '',
        'city' => 'San Francisco',
        'state' => 'CA',
        'postcode' => '94103',
        'country' => 'US',
        'email' => 'john.doe@example.com',
        'phone' => '(555) 555-5555'
    ],
    'shipping' => [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'address_1' => '969 Market',
        'address_2' => '',
        'city' => 'San Francisco',
        'state' => 'CA',
        'postcode' => '94103',
        'country' => 'US'
    ],
    'line_items' => [
        [
            'product_id' => 9,
            'quantity' => 2
        ],
        [
            'product_id' => 22,
            'variation_id' => 23,
            'quantity' => 1
        ]
    ]
];


print_r(json_encode($woocommerce->post('orders', $data)));




?>