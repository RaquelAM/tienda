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
				<p>Llena el formulario para completar la compra</p>
				<form id="orderForm">
					<p>Datos Pago</p>
					<input type="text" name="first_name" placeholder="Nombre">
					<input type="text" name="last_name" placeholder="Apellidos">
					<input type="text" name="address_1" placeholder="Dirección">
					<input type="text" name="city" placeholder="Ciudad">
					<input type="text" name="state" placeholder="Estado">
					<input type="text" name="postcode" placeholder="CP">
					<input type="text" name="country" placeholder="País">
					<input type="mail" name="email" placeholder="Correo">
					<input type="text" name="phone" placeholder="Teléfono">
					<p>Datos Envio</p><div id="sameInfo">Usar la misma información</div>
					<input type="text" name="first_name_shipping" placeholder="Nombre">
					<input type="text" name="last_name_shipping" placeholder="Apellidos">
					<input type="text" name="address_1_shipping" placeholder="Dirección">
					<input type="text" name="city_shipping" placeholder="Ciudad">
					<input type="text" name="state_shipping" placeholder="Estado">
					<input type="text" name="postcode_shipping" placeholder="CP">
					<input type="text" name="country_shipping" placeholder="País">
					<button id="createOrder">Enviar</button>
				</form>
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
	</script>
</body>
</html>