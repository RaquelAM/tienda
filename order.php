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


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address_1 = $_POST['address_1'];
$city = $_POST['city'];
$state = $_POST['state'];
$postcode = $_POST['postcode'];
$country = $_POST['country'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$first_name_shipping = $_POST['first_name_shipping'];
$last_name_shipping = $_POST['last_name_shipping'];
$address_1_shipping = $_POST['address_1_shipping'];
$city_shipping = $_POST['city_shipping'];
$state_shipping = $_POST['state_shipping'];
$postcode_shipping = $_POST['postcode_shipping'];
$country_shipping = $_POST['country_shipping'];

$listProd = json_decode($_POST['productList']);

//print_r($listProd);


//$data = json_decode();



$dataa = [
    'payment_method' => 'bacs',
    'payment_method_title' => 'Direct Bank Transfer',
    'set_paid' => true,
    'billing' => [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'address_1' => $address_1,
        'address_2' => '',
        'city' => $city,
        'state' => $state,
        'postcode' => $postcode,
        'country' => $country,
        'email' => $email,
        'phone' => $phone
    ],
    'shipping' => [
        'first_name' => $first_name_shipping,
        'last_name' => $last_name_shipping,
        'address_1' => $address_1_shipping,
        'address_2' => '',
        'city' => $city_shipping,
        'state' => $state_shipping,
        'postcode' => $postcode_shipping,
        'country' => $country_shipping,
    ],
    'line_items' => $listProd,
    'shipping_lines' => [
        [
            'method_id' => 'flat_rate'
        ]
    ]
];

print_r(json_encode($woocommerce->post('orders', $dataa)));




?>