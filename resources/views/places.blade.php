@extends('template')


@section('titulo')
	Places 
@stop


@section('contenido')
<div class="col-md-12">
		
		<!-- Forms -->
		<div class="z-depth-1 col-md-12"><br>
<!--form-->
<div class="col-md-6">
				<h5>Agregar Lugar</h5><hr>	
				<form method="post" class="form-inline" id="formSubir" enctype="multipart/form-data" action="#">
				<!--<input id="id" display="none" />-->
			
					<div class="md-form">
					<input type="hidden" name="_token" value="{{ csrf_token()}}" />
						<input type="text"id="titulo"   class="form-control">
						<label for="form41" id="dir" class="">Titulo lugar</label>
					</div>

					<div class="md-form">
					
						<input type="number"id="latitud"   class="form-control">
						<label for="form41" id="lat" class="">Latitud lugar</label>
					</div>


					<div class="md-form">
					
						<input type="number"id="longitud"   class="form-control">
						<label for="form41" id="lon" class="">Longitud lugar</label>
					</div>





					<div class="md-form">
						<div class="file-field">
							<div class="btn btn-primary btn-sm">
								<span>Imagen del lugar</span>
								<input name="imagenes" id="imagenes" type="file">
							</div>
							<div class="file-path-wrapper">
							   <input class="file-path validate" type="text" placeholder="selecciona imagen">
							</div>
						</div>
					</div><br>
					<div class="md-form text-xs-center">
						<button type="button" class="btn_enviar btn btn-success"  value="Guardar">Guardar</button>
						
					</div>
				</form>
			</div>
			
</div></div>

@stop


@section('js')
<script src="assets/sweetalert-master/dist/sweetalert.min.js"></script>
          <script src="assets/sweetalert-master/dist/sweetalert.min.js"></script>
          <link rel="stylesheet" type="text/css" href="assets/sweetalert-master/dist/sweetalert.css">
        <script type="text/javascript" src="assets/js/places.js"></script>
@stop