@extends('template')


@section('titulo')
	Comentarios 
@stop


@section('contenido')

<!DOCTYPE html>
<html>
 <meta charset="UTF-8">
<head>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBz_1Kuw1jBQW5XR30mHe2OnFyyvtt2-Fw'></script>
   <script src="assets/js/jquery.min.js"></script>
     <script type="text/javascript">
    function initialize() {
    	
      var marcadores = [
      @foreach($places as $s)
        ['{{$s->id}}','{{$s->latitud}}', '{{$s->longitud}}','{{$s->address}}'],
         @endforeach
      ];
    console.log(marcadores);
      var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 10,
        center: new google.maps.LatLng(25.513581184583646, -103.21746860937492),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var content="hola";
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i <= marcadores.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map,
          animation:google.maps.Animation.DROP,
          draggable: true
         // icon:"/images/city.gif"


        });
        //////////////////////////////
  
   google.maps.event.addListener(marker, 'click', function() {
 
// Llamamos el método open del InfoWindow
infowindow.open(map, marker);
});
      
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][3]);
            infowindow.open(map, marker);
           
            ////////////////////////////////////////////////////

//var id=$(this).attr('id');
    data={id:marcadores[i][0]}
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



            /////////////////////////////////////////////////////
          }
        })(marker, i));
         
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>













    			
	<title>Comentarios</title>
<!---->





<!---->

<style type="text/css">
    #mapa { height: 500px; }
    </style>




 <!--<div id="mapa"></div>
<div class="container">
				<div class="row">
						<div class="col-md-12">
										<div id="places">

											</div>
							</div>
					</div>
	</div>
	<div class="container">
				<div class="row">
						<div class="col-md-12">
										<div id="opinions">

											</div>
							</div>
					</div>
	</div>
-->


<!------------>


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
       
      </div>
    </div>
  </div>
</div>


<!---->
<div id="places">

                      </div>

@stop


@section('js')
<script src="assets/sweetalert-master/dist/sweetalert.min.js"></script>
          <script src="assets/sweetalert-master/dist/sweetalert.min.js"></script>
          <link rel="stylesheet" type="text/css" href="assets/sweetalert-master/dist/sweetalert.css">
        <script type="text/javascript" src="assets/js/comentarios.js"></script>
@stop