<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PlaceSAFE</title>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
		
	<!-- Estilos del framework MDB -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/assets/css/mdb.min.css" />
	<link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/assets/css/index-style.css" />
		
	
<!--Navbar-->
<nav class="navbar navbar-dark navbar-fixed-top bg-placesafe" style="z-index:1000;">

    <!-- Collapse button-->
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
        <i class="fa fa-bars"></i>
    </button>

    <div class="container">

        <!--Collapse content-->
        <div class="collapse navbar-toggleable-xs" id="collapseEx2">
            <!--Navbar Brand-->
            <a class="navbar-brand">placeSAFE</a>
            <!--Links-->
            <ul class="nav navbar-nav pull-right">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#login-modal">Iniciar Sesión</a>
                </li>
            </ul>
        </div>
        <!--/.Collapse content-->

    </div>

</nav>
<!--/.Navbar-->

</head>
<body>
	<!-- Inicio -->
	<div class="view-entrada hm-black-strong" id="inicio">
		<div class="full-bg-img flex-center">
			<ul class="animated rubberBand"><br>
				
				<li class="container-fluid">
					<h1 class="h1-responsive white-text">PlaceSafe | Conoce . Opina . Reacciona</h1>
				</li>
				<div class="col-xs-1 col-md-2"></div>
				<div class="button-sm-access col-xs-10 col-md-8">
				  <a class="btn default-rounded-outline waves-effect" style="color:#fff;" href="#">Descargar app</a>
				  
				</div>
				<div class="col-xs-1 col-md-2"></div>
				<br>
			</ul>
		</div>
	</div>
	
	<!-- Descripción -->
	<div class="col-md-12">
		<div class="container" id="description">
			<h3 class="pull-left">¿Qué es PlaceSAFE?</h3><hr>
		</div>
	</div>
	
	<!-- Galeria -->
	<div class="col-md-12">
		<div class="container" id="description">
			<h3 class="pull-right">Galería de nuestra app</h3><hr>
		</div>
	</div>
	
	<!-- Modal Login -->
	<div class="modal fade modal-ext" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<!--Content-->
					<div class="modal-content">

						<!--Header-->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h3><i class="fa fa-"></i> Login</h3>
						</div>

						<!--Body-->
						<div class="modal-body">
							<div class="md-form">
								<i class="fa fa-user prefix"></i>
								<input type="text" id="usuario" class="form-control">
								<label for="username">Username</label>
							</div>

							<div class="md-form">
								<i class="fa fa-lock prefix"></i>
								<input type="password" id="password" class="form-control">
								<label for="password">Password</label>
							</div>
							<div class="text-xs-center">
								<button class="btn btn-primary btn-lg" id="entrar">Iniciar</button>
							</div>
						</div>

						<!--Footer-->
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!--/.Content-->
				</div>
			</div>
	
	<!-- Scripts del framework -->
	<script src="assets/js/jquery-2.2.3.min.js"></script>
	<script src="assets/js/tether.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/mdb.min.js"></script>
	
<!--link sweat-->
<link rel="stylesheet" type="text/css" href="assets/sweetalert-master/themes/twitter/twitter.css">

 <script src="assets/sweetalert-master/dist/sweetalert.min.js"></script>
   <script src="assets/sweetalert-master/dist/sweetalert.min.js"></script>
     <link rel="stylesheet" type="text/css" href="assets/sweetalert-master/dist/sweetalert.css">

<script type="text/javascript" src="assets/js/login.js"></script>
</body>
</html>