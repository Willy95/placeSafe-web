jQuery(document).ready(function($) {

	$.ajax({
		url: '/getplaces	',
		type: 'get',
		
		data: {param1: 'value1'},
	})
	.done(function(e) {
		$.each(e,function(index, el) {
			$("#places").append('<p id="'+el.id+'">'+el.address+'</p>');
		});

 
	})
	.fail(function(e) {
		console.log(e);
	})
	.always(function() {
		console.log("complete");
	});

	$("#places").on('click', 'p', function(event) {
		event.preventDefault();
		var id=$(this).attr('id');
		data={id:id}
		$.ajax({
			url: '/getopinions',
			type: 'get',
			
			data: {data},
		})
		.done(function(e) {
			$("#content-comments").html('Comentarios');
				$.each(e,function(index, el) {
//$("#opinions").append('<p id="'+el.id+'">'+el.opinionText+'</p><span id="eliminar" numero='+el.id+' class="glyphicon glyphicon-trash"></span>');
$("#content-comments").append('<div class="col-md-12 z-depth-1" style="padding-top:7px; margin-top:5px;"  id="'+el.id+'" ><p><i class="fa fa-user"></i><a href="#" id="eliminar" numero='+el.id+'>Eliminar</a></p><hr><p><i class="fa fa-comment"  ></i> '+el.opinionText+'</p></div>');


		});
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});

	$("#content-comments").on('click', '#eliminar', function(event) {
		event.preventDefault();
		var id=$(this).attr('numero');
		console.log(id);
		var data={id:id}
swal({   title: "Esta seguro de eliminar este comentario?",   text: "",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Si, Eliminarla!",   closeOnConfirm: false }, function()
		{ 
			$.ajax({
			url: '/deleteopinion',
			type: 'post',
			
			data: {data},
		})
		.done(function(e) {
			swal("Bien!", "El comentario ha sido eliminado correctamente", "success")
				
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
});
	});
	
});