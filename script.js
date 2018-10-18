function addToCar(id, name){
	var cantidad = $("[data-id='"+id+"']").val()
	var add = true
	console.log(id, name, cantidad)
	var prod = {
		"id": id,
		"name": name,
		"quantity": cantidad
	}
    var a = JSON.parse(sessionStorage.getItem('car'));
    if (a == null) {
    	var newProd =  [prod]
    	sessionStorage.setItem('car', JSON.stringify(newProd))
    	counterItemsCar()
    }else{
    	$.each(a,function(i, value){
    		if (value.id == id) {
    			add = false
    			a[i] = prod
    		}
    	})
    	if (add) {
			a.push(prod);
		}
		sessionStorage.setItem('car', JSON.stringify(a))
		counterItemsCar()
    }
	
}

function counterItemsCar(){
	var a = JSON.parse(sessionStorage.getItem('car'));
	console.log(a)
	if (a == null) {
    	$("#items").html("0")
    }else{
    	var cant = 0
    	$.each(a,function(i, value){
    		cant = cant + parseInt(value.quantity)
    	})
    	$("#items").html(cant)
    }
}