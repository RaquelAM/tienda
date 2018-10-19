function addToCar(id, name, price){
	var cantidad = $("[data-id='"+id+"']").val()
	if (cantidad !== "") {
		var add = true
		var prod = {
			"product_id": id,
			"name": name,
			"quantity": cantidad,
			"price": price
		}
		console.log(prod)
	    var a = JSON.parse(sessionStorage.getItem('car'));
	    if (a == null && prod.quantity !== "0"  ) {
	    	var newProd =  [prod]
	    	sessionStorage.setItem('car', JSON.stringify(newProd))
	    	counterItemsCar()
	    }else{
	    	$.each(a,function(i, value){
	    		if (value.id == id) {
	    			if (cantidad == "0") {
		    			a = a.filter(item => item.id !== id);
	    			}else{
	    				add = false
		    			a[i] = prod
	    			}
	    		}
	    	})
	    	if (add && prod.quantity !== "0"	) {
				a.push(prod);
			}
			sessionStorage.setItem('car', JSON.stringify(a))
			counterItemsCar()
	    }
	}
	
}

function counterItemsCar(){
	var a = JSON.parse(sessionStorage.getItem('car'));
	if (a == null) {
    	$("#items").html("0")
    }else{
    	var cant = 0
    	$.each(a,function(i, value){
    		cant = cant + parseInt(value.quantity)
    	})
    	$("#items").html(cant)
    	listCarInfo()
    }
}
function listCarInfo(){
	$("#listCar").html("")
	var a = JSON.parse(sessionStorage.getItem('car'));
	var total = 0
	if (a !== null) {
		if (a.length !== 0) {
			$.each(a, function(i, value){
				$("#listCar").append(value.name + " " + value.quantity + " x $" + value.price + "<br>")
				total = total + (parseInt(value.quantity) * value.price)
				$("#total").html("Total: $" + total)
			})
		}
	}
}

$("#sameInfo").on("click", function(){
	$( "input[name='first_name_shipping']" ).val($( "input[name='first_name']" ).val())
	$( "input[name='last_name_shipping']" ).val($( "input[name='last_name']" ).val())
	$( "input[name='address_1_shipping']" ).val($( "input[name='address_1']" ).val())
	$( "input[name='city_shipping']" ).val($( "input[name='city']" ).val())
	$( "input[name='state_shipping']" ).val($( "input[name='state']" ).val())
	$( "input[name='postcode_shipping']" ).val($( "input[name='postcode']" ).val())
	$( "input[name='country_shipping']" ).val($( "input[name='country']" ).val())
})

$("#createOrder").on("click", function(e){
	e.preventDefault()

	var a = sessionStorage.getItem('car');
	$.ajax({
		type: "POST",
		data: $('#orderForm').serialize() + "&productList=" + a,
		url: "order.php",
		success: function (mje) {
			
			console.log(mje)


			localStorage.clear();
			
		},
		
	});
})