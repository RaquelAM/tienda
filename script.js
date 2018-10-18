function addToCar(id, name, price){
	var cantidad = $("[data-id='"+id+"']").val()
	if (cantidad !== "") {
		var add = true
		var prod = {
			"id": id,
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