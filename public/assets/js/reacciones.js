jQuery(document).ready(function($) {

$("#id").slideUp();
$("#preview").slideUp();

mostrarreacciones();
function mostrarreacciones()
{
	$("#btn_actualizar").slideUp();
	$("#btn_restaurar").slideUp();

	$.ajax({
		url: '/mostrarreaccioes',
		type: 'POST',
		
		data: {param1: 'value1'},
	})
	.done(function(e) {
		$("#reacciones").html('');
		$.each(e,function(index, el) {
			//$("#reacciones").append('<div id="actualiza"  identificador="'+el.id+'" nombre="'+el.name+'" imagen="'+el.image+'" > <img src="'+el.image+'"/ width="100px" class="img-fluid imgReaction" height="100px"/>  '+el.name +'  </div>')
		 
$("#reacciones").append('<div class="col-md-2" id="actualiza" identificador="'+el.id+'" nombre="'+el.name+'" imagen="images/reactions/'+el.image+'"><a><img src="images/reactions/'+el.image+'"  class="img-fluid imgReaction"><p class="text-xs-center nameReaction"> '+el.name +'</p></a></div>');

		});
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}
$("#reacciones ").on('click', '#actualiza', function(event) {
	$("#nombre").val($(this).attr('nombre'));
	$("#preview").attr('src',$(this).attr('imagen'));
	console.log($(this).attr('identificador'));
	$("#btn_actualizar").slideDown();
	$(".btn_enviar").slideUp();
	$("#btn_restaurar").slideDown();
	$("#id").val($(this).attr('identificador'));
	$("#preview").slideDown();
	$("#nom").addClass('active');
	
});

$("#btn_restaurar").click(function(event) {
	event.preventDefault();
	$("#btn_actualizar").slideUp();
	$(".btn_enviar").slideDown();
	$("#btn_restaurar").slideUp();
	$("#preview").slideUp();
	$("#formSubir")[0].reset();
});
$("#btn_actualizar").click(function(event) {
	event.preventDefault();
	if ($("#nombre").val()=="")
		{
				swal("Heeeeeey!", "Ingresa el nombre de la reaccion!", "error")


		}
		else if($("#nombre").val()!=""&& $("#imagenes").val()=="")
		{
			var data={nombre:$("#nombre").val(), id:$("#id").val()}
				$.ajax({
					url: '/actualizarreaccionsinimagen',
					type: 'post',
					
					data: {data},
				})
				.done(function() {
					swal("Bien!", "Todo salio Correctamente!", "success")
					$("#btn_restaurar").click();
					mostrarreacciones();
					$("#formSubir")[0].reset();
					$("#preview").slideUp();
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
				
		}
		else if($("#nombre").val()!=""&& $("#imagenes").val()!="")
		{
			var token=$('input[name=_token]').val();
		//formdata.append('key',$("#imagenes")[0].files[0]);
		var data=new FormData(document.getElementById('formSubir'));
		var file=$('#imagenes')[0].files[0];
		if (file)
		{
			data.append('imagenes',file);
			data.append('nombre',$("#nombre").val());
			data.append('id',$("#id").val());
		}
		$.ajax({
			url: '/actualizarreaccionconimagen',
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
				$("#btn_restaurar").click();
					$("#formSubir")[0].reset();
			}
			else if(e=="existe")
			{
				swal("Heeeeeey!", "Nombre de reaccion existente!", "error")
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


	$(".btn_enviar").on('click', function(event) {
		event.preventDefault();



		if ($("#nombre").val()=="")
		{
				swal("Heeeeeey!", "Ingresa el nombre de la reaccion!", "error")

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
			data.append('nombre',$("#nombre").val());
		}
		$.ajax({
			url: '/subirreacciones',
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
				swal("Heeeeeey!", "Nombre de reaccion existente!", "error")
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