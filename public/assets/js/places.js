jQuery(document).ready(function($) {
		$(".btn_enviar").on('click', function(event) {
		event.preventDefault();



		if ($("#titulo").val()=="")
		{
				swal("Heeeeeey!", "Ingresa el titulo!", "error")

		}
		else if ($("#longitud").val()=="")
		{
				swal("Heeeeeey!", "Ingresa la longitud!", "error")

		}
		else if ($("#latitud").val()=="")
		{
				swal("Heeeeeey!", "Ingresa la latitud!", "error")

		}

		else if($("#imagenes").val()=="")
		{
				swal("Heeeeeey!", "Selecciona una imagen!", "error")
		}
		else
		{
			//var formdata= new FormData($("#formSubir")[0]);
		var token=$('input[name=_token]').val();
		//formdata.append('key',$("#imagenes")[0].files[0]);
		var data=new FormData(document.getElementById('formSubir'));
		var file=$('#imagenes')[0].files[0];
		if (file)
		{
			data.append('imagenes',file);
			data.append('titulo',$("#titulo").val());
			data.append('longitud',$("#longitud").val());
			data.append('latitud',$("#latitud").val());
		}
		$.ajax({
			url: '/subirplaces',
			type: 'post',
			headers:{'X-CSRF-TOKEN':token},
			contentType:false,
			processData:false,
			cache:false,

			data: data
		})
		.done(function(e) {
			console.log("success");
			console.log(e);
			if (e=="success")
			{
				
				swal("Bien!", "Todo salio Correctamente!", "success")
				mostrarreacciones();
					$("#formSubir")[0].reset();
			}
			else if(e=="existe")
			{
				swal("Heeeeeey!", "Nombre  existente!", "error")
			}
			else
			{
				swal("Heeeeeey!", "Ocurrio un error en el servidor!", "error")
			}
			
		})
		.fail(function(e) {
			console.log(e);
		})
		.always(function() {
			console.log("complete");
		});
		}
		
		
	});
});