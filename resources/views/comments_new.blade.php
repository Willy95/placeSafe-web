@extends('template')


@section('titulo')
	Comentarios 
@stop


@section('contenido')
<div class="row">
	<div class="col-md-12 z-depth-1">
		<div class="col-md-8"><br>
			<h5>Mapa de ubicaciones</h5><hr>
			<div id="mapa">
				
			</div>
		</div>
		<div class="col-md-4"><br>
			<h5>Comentarios del lugar</h5><hr>
			<div id="content-comments">
				<div class="col-md-12 z-depth-1" style="padding-top:7px; margin-top:5px;">
					<p><i class="fa fa-user"></i> pepillo | <a href="#">Eliminar</a></p><hr>
					<p><i class="fa fa-comment"></i> comentarios sobre el lugar</p>
				</div>
				<div class="col-md-12 z-depth-1" style="padding-top:7px; margin-top:5px;">
					<p><i class="fa fa-user"></i> pepillo | <a href="#">Eliminar</a></p><hr>
					<p><i class="fa fa-comment"></i> comentarios sobre el lugar</p>
				</div>
				<div class="col-md-12 z-depth-1" style="padding-top:7px; margin-top:5px;">
					<p><i class="fa fa-user"></i> pepillo | <a href="#">Eliminar</a></p><hr>
					<p><i class="fa fa-comment"></i> comentarios sobre el lugar</p>
				</div>
				<div class="col-md-12 z-depth-1" style="padding-top:7px; margin-top:5px;">
					<p><i class="fa fa-user"></i> pepillo | <a href="#">Eliminar</a></p><hr>
					<p><i class="fa fa-comment"></i> comentarios sobre el lugar</p>
				</div>
				<div class="col-md-12 z-depth-1" style="padding-top:7px; margin-top:5px;">
					<p><i class="fa fa-user"></i> pepillo | <a href="#">Eliminar</a></p><hr>
					<p><i class="fa fa-comment"></i> comentarios sobre el lugar</p>
				</div>
			</div>
		</div>
	</div>
</div>
@stop


@section('js')

@stop