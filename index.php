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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<section class="container">
		<div class="row">
			<div class="col-md-8">
				<?php 
				$productos = $woocommerce->get('products'); 
				
				foreach ($productos as $producto){
					$html = '<div class="col-md-6 text-center"><img src="'.$producto->images[0]->src.'" style="width: 100%;"><span style="display: block;">'.$producto->name.'</span>'.PHP_EOL;
					$html .= '<input type="number" min="0" placeholder="cantidad" data-id="'.$producto->id.'">'.PHP_EOL;
					$html .= '<button onclick="addToCar('.$producto->id.',\''.$producto->name.'\','.$producto->price.')">Agregar a carrito</button></div>'.PHP_EOL;
			    	echo $html;
			    	}
			    	//print_r($producto)
				?>
			</div>
			<div class="col-md-4 text-center">
				<span>Carrito</span>
				<br>
				# Artículos: <span id="items"></span>
				<div id="listCar">
					
				</div>
				<div id="total"></div>
			</div>
		</div>
	</section>

	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript">
		counterItemsCar();
	</script>
</body>
</html>