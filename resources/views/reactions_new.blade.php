@extends('template')


@section('titulo')
	Reacciones
@stop


@section('contenido')
<div class="row">
	<div class="col-md-12">
		
		<!-- Forms -->
		<div class="z-depth-1 col-md-12"><br>
			<div class="col-md-6">
				<h5>Agregar Reacción</h5><hr>	
				<form action="" class="form-inline">
				
					<div class="md-form">
						<input type="text" id="form41" class="form-control">
						<label for="form41" class="">Nombre reacción</label>
					</div>
					<div class="md-form">
						<div class="file-field">
							<div class="btn btn-primary btn-sm">
								<span>Emoticon</span>
								<input type="file">
							</div>
							<div class="file-path-wrapper">
							   <input class="file-path validate" type="text" placeholder="selecciona imagen">
							</div>
						</div>
					</div><br>
					<div class="md-form text-xs-center">
						<button type="button" class="btn btn-success" id="guardar">Guardar</button>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<h5>Editar Reacción</h5><hr>
				<form action="" class="form-inline">
					<div class="md-form pull-right">
						<!-- Aqui se pone la imagen del emoticon que se editará -->					
						<img src="/images/happy.png" alt="" class="img-fluid imgReaction-edit">
					</div>
					<div class="md-form">
						<input type="text" id="form42" class="form-control">
						<label for="form42" class="">Nombre reacción</label>
					</div>
					<div class="md-form">
						<div class="file-field">
							<div class="btn btn-primary btn-sm">
								<span>Emoticon</span>
								<input type="file">
							</div>
							<div class="file-path-wrapper">
							   <input class="file-path validate" type="text" placeholder="selecciona imagen">
							</div>
						</div>
					</div><br>
					<div class="md-form text-xs-center">
						<button type="button" class="btn btn-info" id="editar">Editar</button>
					</div>
				</form>
			</div>
		</div>
		<!-- Reacciones agregadas -->
		<div class="z-depth-1 col-md-12" style="margin-top:30px; margin-bottom:30px;"><br>
			<h5>Reacciones registradas</h5><hr>
			<div class="col-md-1"></div> <!-- Este div es solo para acomodar mejor los elementos -->
			<div class="content-reactions"> <!-- Aqui se vacian las reacciones que se guardan -->
				<div class="col-md-2">
					<a><img src="/images/happy.png" alt="" class="img-fluid imgReaction">
					<p class="text-xs-center nameReaction">Feliz</p></a>
				</div>
				<div class="col-md-2">
					<a><img src="/images/happy.png" alt="" class="img-fluid imgReaction">
					<p class="text-xs-center nameReaction">Feliz</p></a>
				</div>
				<div class="col-md-2">
					<a><img src="/images/happy.png" alt="" class="img-fluid imgReaction">
					<p class="text-xs-center nameReaction">Feliz</p></a>
				</div>
				<div class="col-md-2">
					<a><img src="/images/happy.png" alt="" class="img-fluid imgReaction">
					<p class="text-xs-center nameReaction">Feliz</p></a>
				</div>
				<div class="col-md-2">
					<a><img src="/images/happy.png" alt="" class="img-fluid imgReaction">
					<p class="text-xs-center nameReaction">Feliz</p></a>
				</div>
			</div> 
		</div>
	</div>
</div>
@stop


@section('js')

@stop