@if(Session::has('usuario'))
   <script type="text/javascript">
   
   </script>
@else

 <script type="text/javascript">
       window.location.href="/";
   </script>
@endif

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>@yield('titulo')</title>
	
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/assets/css/mdb.min.css" />
	<link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/assets/css/template.css" />
	<link rel="stylesheet" href="/assets/css/vistas.css" />
	
	@yield('css')
</head>
<body>
	
	
<!-- Sidebar navigation -->
<ul id="slide-out" class="side-nav fixed light-side-nav elegant-color">

    <!-- Logo -->
    <div class="logo-canales waves-light"><br>
        <a id="nombreUsuario" href="#" class="white-text">{{ Session::get('usuario') }}</a>
    </div>
    <!--/. Logo -->


    <!-- Side navigation links -->
    <ul class="collapsible collapsible-accordion">
       <li class="nav-item">
            <a id="#" href="/reacciones" class="nav-link waves-effect waves-light"><i class="fa fa-smile-o"></i> 
            Reacciones</a>
        </li>
        <li class="nav-item">
            <a id="#" href="/comments" class="nav-link waves-effect waves-light"><i class="fa fa-comments-o"></i> 
            Mapa y comentarios</a>
        </li>

        <li class="nav-item">
            <a id="#" href="/places" class="nav-link waves-effect waves-light"><i class="fa fa-comments-o"></i> 
            Lugares</a>
        </li>


        <li class="nav-item hidden-lg-up hidden-md-up">
            <a id="logOut" href="/salir" class="nav-link waves-effect waves-light"><i class="fa fa-sign-out"></i> Cerrar Sesión</a>
        </li>
    </ul>
    <!--/. Side navigation links -->
</ul>
<!--/. Sidebar navigation -->

<main>
	<div class="main-wrapper">
		<nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar double-nav default-color-dark">

            <div class="pull-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>

            <!-- Breadcrumb-->
            <!--<div class="col-md-3">
                <form action="" class="search-form">
					<div class="form-group has-feedback">
						<label for="search" class="sr-only">Search</label>
						<input type="text" class="form-control" name="search" id="search" placeholder="buscar género o artista">
						<span id="buscar" class="fa fa-search form-control-feedback"></span>
					</div>
				</form>
            </div>-->


            <ul class="nav navbar-nav pull-right">
            	<li class="nav-item hidden-xs-down hidden-sm-down">
                   <a id="logOut" href="/" class="nav-link waves-effect waves-light"><i class="fa fa-sign-out"></i> <span class="hidden-sm-down">Cerrar Sesión</span></a>
                </li>
            </ul>
        </nav>
        
        <div class="col-md-8 col-sm-10 col-xs-12 col-md-offset-3 col-sm-offset-1 centrado">
        	@yield('contenido')
        	
        </div>
	</div>
</main>
	
	<!-- Scripts del framework -->
	<script src="assets/js/jquery-2.2.3.min.js"></script>
	<script src="assets/js/tether.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/mdb.min.js"></script>
	
	@yield('js')
</body>
</html>