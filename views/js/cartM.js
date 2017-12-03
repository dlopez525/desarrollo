var inicio=function () {
	$(".cantidad").keyup(function(e){
		if($(this).val()!=''){
			if(e.keyCode==13){
				var id=$(this).attr('data-id');
				var precio=$(this).attr('data-precio');
				var cantidad=$(this).val();
				$(this).parentsUntil('.productos__item').find('.productos__item__details__subtotal').text('Subtotal: '+(precio*cantidad));
				$.post('../views/js/modificarDatosM.php',{
					Id:id,
					Precio:precio,
					Cantidad:cantidad
				},function(e){
						$("#totalCarrito__item").text('S/. '+e);
				});
			}
		}
	});
	$(".productos__item__details__del").click(function(e){
		e.preventDefault();
		var id=$(this).attr('data-id');
		$(this).parentsUntil('.productos__item').remove();
		$.post('../views/js/eliminarCartM.php',{
			Id:id
		},function(a){
			if(a=='0'){
				location.href="./cartM.php";
			}
		});
	});
}
$(document).on('ready',inicio);

// var inicio=function () {
// 	$(".cantidad").keyup(function(e){
// 		if($(this).val()!=''){
// 			if(e.keyCode==13){
// 				var id=$(this).attr('data-id');
// 				var precio=$(this).attr('data-precio');
// 				var cantidad=$(this).val();
// 				$(this).parentsUntil('.producto').find('.subtotal').text('Subtotal: '+(precio*cantidad));
// 				$.post('../views/js/modificarDatos.php',{
// 					Id:id,
// 					Precio:precio,
// 					Cantidad:cantidad
// 				},function(e){
// 						$("#total").text('Total: '+e);
// 				});
// 			}
// 		}
// 	});
// 	$(".eliminar").click(function(e){
// 		e.preventDefault();
// 		var id=$(this).attr('data-id');
// 		$(this).parentsUntil('.producto').remove();
// 		$.post('../views/js/eliminarCart.php',{
// 			Id:id
// 		},function(a){
//
// 			if(a=='0'){
// 				location.href="./cart.php";
// 			}
// 		});
//
// 	});
// }
// $(document).on('ready',inicio);
