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
				<span>Carrito</span>
				<br>
				<div id="listCar">
					
				</div>
				<div id="total"></div>
				<a href="order-form.php">Finalizar Compra</a>
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