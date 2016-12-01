@extends('template')


@section('titulo')
	Reacciones
@stop


@section('contenido')

<!DOCTYPE html>
<html>
<head>

	<title></title>
			<script src="assets/js/jquery.min.js"></script>
			<!--	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> 
    			<script src="assets/bootstrap/js/bootstrap.min.js"></script><div class="container">-->
    			<script src="assets/sweetalert-master/dist/sweetalert.min.js"></script>
   				<script src="assets/sweetalert-master/dist/sweetalert.min.js"></script>
     			<link rel="stylesheet" type="text/css" href="assets/sweetalert-master/dist/sweetalert.css">
				<script type="text/javascript" src="assets/js/reacciones.js"></script>

</head>
<body> 

	
<!--formulario-->
	<!--	<div class="container">
			<div class="row">
					<div class="z-depth-1 col-md-12">
						<form method="post" class="form-inline" id="formSubir" enctype="multipart/form-data" action="#">

							<p>Reacciones</p>
							<input id="id" display="none" />
							<div ><img src="" id="preview" height="100px" width="100px"></div>
							<input type="hidden" name="_token" value="{{ csrf_token()}}" />
							<!--<p><input name="imagenes" id="imagenes" class="file-path validate" type="file"/></p>
							<div class="btn btn-primary btn-sm">
								<span>Emoticon</span>
								<input name="imagenes" id="imagenes" type="file">
							</div>

							<div class="md-form">
						<input type="text" id="nombre"  class="form-control" placeholder="Nombre">
						<label for="form41" class="">Nombre reacción</label>
					</div>

							<!--<p><input type="text" id="nombre" name="nombre"  class="form-control" placeholder="Nombre" /></p>
							<p><input class="btn_enviar btn btn-success"  value="Guardar" type="submit"/></p>
								<p><input id="btn_actualizar" value="Actualizar" type="submit"/></p>
								<p><input id="btn_restaurar" value="Restaurar" type="submit"/></p>

						</form>
					</div>				
			</div>
		</div>-->


<div class="col-md-12">
		
		<!-- Forms -->
		<div class="z-depth-1 col-md-12"><br>
<!--form-->
<div class="col-md-6">
				<h5>Agregar Reacción</h5><hr>	
				<form method="post" class="form-inline" id="formSubir" enctype="multipart/form-data" action="#">
				<input id="id" display="none" />
			
					<div class="md-form">
					<input type="hidden" name="_token" value="{{ csrf_token()}}" />
						<input type="text"id="nombre"   class="form-control">
						<label for="form41" id="nom" class="">Nombre reacción</label>
					</div>
					<div class="md-form">
						<div class="file-field">
							<div class="btn btn-primary btn-sm">
								<span>Emoticon</span>
								<input name="imagenes" id="imagenes" type="file">
							</div>
							<div class="file-path-wrapper">
							   <input class="file-path validate" type="text" placeholder="selecciona imagen">
							</div>
						</div>
					</div><br>
					<div class="md-form text-xs-center">
						<button type="button" class="btn_enviar btn btn-success"  value="Guardar">Guardar</button>
							<button type="button" class=" btn btn-success" id="btn_actualizar"  value="Actualizar">Actualizar</button>
								<button type="button" class="btn btn-success" id="btn_restaurar"  value="Restaurar">Restaurar</button>
					</div>
				</form>
			</div>
			<div class="col col-md-4 col-md-offset-1"><h5>Preview</h5><hr>
				<img src="" id="preview"  class="img-fluid">
			</div>
</div></div>
<!-- Reacciones agregadas -->
		<div class="z-depth-1 col-md-12" style="margin-top:30px; margin-bottom:30px;"><br>
			<h5>Reacciones registradas</h5><hr>
			<div class="col-md-1"></div> <!-- Este div es solo para acomodar mejor los elementos -->
			<div class="content-reactions" id="reacciones"> <!-- Aqui se vacian las reacciones que se guardan -->
				
			</div> 
		</div>
</body>
</html>
@stop


@section('js')

@stop