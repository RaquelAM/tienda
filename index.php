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
?>


<!DOCTYPE html>
<html>
<head>
	<title>Mi tiendita online</title>
</head>
<body>
	<?php 
	$productos = $woocommerce->get('products'); 
	
	foreach ($productos as $producto){
		$html = '<div style="text-align: center; width: 500px;"><img src="'.$producto->images[0]->src.'" style="width: 100%;"><span style="display: block;">'.$producto->name.'</span></div>'.PHP_EOL;
		$html .= '<input type="number" min="0" placeholder="cantidad" data-id="'.$producto->id.'">'.PHP_EOL;
		$html .= '<button onclick="addToCar('.$producto->id.',\''.$producto->name.'\')">Agregar a carrito</button>'.PHP_EOL;
    	echo $html;
    	}
    	//print_r($producto->images[0]->src)
	?>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>