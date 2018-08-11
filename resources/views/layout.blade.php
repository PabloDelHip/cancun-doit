
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{ url('/img/ico.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="icono/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="icono/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="icono/favicon-16x16.png">
	<link rel="manifest" href="icono/site.webmanifest">
	<link rel="mask-icon" href="icono/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="icono/favicon.ico">
	<link rel="canonical" href="{{Request::fullUrl()}}"/>
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="icono/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<title>{{ $Title = (isset($title)) ? $title : ''}}</title>
	<meta name='description' content='{{ $Meta = (isset($meta_description)) ? $meta_description : ""}}'>
	<meta name="title" content="{{ $Title = (isset($title)) ? $title : ''}}"/>
	<meta name="Keywords" content="{{ $Keywords = (isset($keywords)) ? $keywords : ''}}" />
	<meta name="author" content="Ing. Pablo Delfin H. || Go Cancún Tours 2018">
	<meta name="owner" content="Go Cancún Tours" />
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <link rel="stylesheet" href="css/superslides.css">
    {{-- <link rel="stylesheet" href="{{ url('/css/fontello.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ url('/css/slick.css') }}"> --}}
     {{-- <link rel="stylesheet" href="{{ url('/css/slick-theme.css') }}"> --}}
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css"> --}}

	{{-- <link rel="stylesheet" type="text/css" href="{{ url('/engine1/style.css') }}" /> --}}
    <script async src='https://www.google.com/recaptcha/api.js'></script>
    <script async src="https://unpkg.com/tippy.js@2.5.4/dist/tippy.all.min.js"></script>

    <script>
    	 function loadCSS(e, t, n) { "use strict"; var i = window.document.createElement("link"); var o = t || window.document.getElementsByTagName("script")[0]; i.rel = "stylesheet"; i.href = e; i.media = "only x"; o.parentNode.insertBefore(i, o); setTimeout(function () { i.media = n || "all" }) }
      loadCSS("{{ url('/css/fontello.css') }}");loadCSS("//fonts.googleapis.com/css?family=Dosis:400,700");loadCSS("{{ url('/css/slick-theme.css') }}");loadCSS("//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css");
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->

	
	@if(isset($tourInfo))
		@foreach($tourInfo as $tour)
			<meta property="og:url" content="{{Request::fullUrl() }}" />
			<meta property="og:title" content="{{ $tour->name }}" />
			<meta property="og:description" content="{{ $tour->description_information }}" />
			<meta property="og:image" content="https://www.gocancuntours.com.mx/img/tours/{{ $tour->image }}" />
	        <script type="application/ld+json">
				{
				  "@context": "http://schema.org",
				  "@type": "Product",
				  "name": "{{ $tour->name }}",
				  "image": "https://www.gocancuntours.com.mx/img/tours/{{ $tour->image }}",	
				  "description": "{{ $tour->description_information }}",
				  "mpn": "7",
				  "brand": {
					"@type": "Product",
					"name": "{{ $tour->name }}"
				  },
				  "aggregateRating": {
					"@type": "AggregateRating",
					"ratingValue": "{{ $tour->qualification }}",
					"reviewCount": "77"
				  },
				  "offers": {
					"@type": "Offer",
					"priceCurrency": "USD",
					"price": "{{ $tour->adult_price }}",
					"priceValidUntil": "2018-07-22",
					"seller": {
					  "@type": "Organization",
					  "name": "Go Canc&uacute;n Tours"
					}
				  },

				}
		    </script>
	    @endforeach

	@elseif(isset($categorie_name))
		<meta property="og:url" content="{{Request::fullUrl() }}" />
		<meta property="og:title" content="{{ $categorie_name }}" />
		<meta property="og:description" content="{{ $meta_description }}" />
		<script type = "application/ld+json" > {
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "{{ $categorie_name }}",
			"description": "{{ $meta_description }}",
			"@graph": [

				 @foreach($tours as $tour)
				 {
				 	"@type": "Product",
				"name": "{{$tour->name}}",
				"description": "{{$tour->description_information}}"
			},
				 @endforeach
			]
		} </script>

	@elseif(isset($categorie->name))

		<meta property="og:url" content="{{Request::fullUrl() }}" />
		<meta property="og:title" content="Go Cancun Tours" />
		<meta property="og:description" content="En Go Cancun Tours encontraras los mejores tours y atracciones en Canc&uacute;n y la Riviera Maya y tours a Chich&eacute;n Itz&aacute;" />
		<meta property="og:image" content="https://www.gocancuntours.com.mx/data1/images/imagen1.jpg" />

		<script type = "application/ld+json">
			{ "@context": "http://schema.org",
			"@type": "WebSite",
			"description": "En Go Cancun Tours encontraras los mejores tours y atracciones en Canc&uacute;n y la Riviera Maya y tours a Chich&eacute;n Itz&aacute;",
			"@graph": [
				@foreach($categories as $categorie)
					{
				"@type": "Product",
				"name": "{{ $categorie->name }}",
				"description": "{{ $categorie->meta_description }}"
				},
				@endforeach
					]
		}
</script>
		
		{{-- <script type="application/ld+json">
		{
		  "@context" : "http://schema.org",
		  "@type" : "Organization",
		  "name" : "Go Cancun Tours",
		  "url" : "http://gocancuntours.com.mx",
		  "sameAs" : [
		    "https://twitter.com/Go_Cancun_Tours",
			"https://plus.google.com/u/1/116990261479691395006",
			"https://www.facebook.com/Go-Cancun-Tours-2070506556528598/?ref=br_rs",
		  ]
		}
		</script> --}}

	@endif

	<style type="text/css">
		#barra-Categoria
		{
			height: 77px; display: none; background-color:  red;
		}
	</style>


</head>
{{-- background-image: url('{{ url('/img/textura.png') }}');" --}}
<body  style=" background-image: url('{{ url('/img/textura.png') }}');">



	<header class="col-12 header-movil {{ (Request::path() != '/') ? 'active' : '' }} ">
		<div class="container datos-contacto-header pt-1 pb-1 ocultar-movil">
			<div class="row justify-content-end d-flex align-items-start">
				<div class="datos-header">
					
					<span>

						<a href="https://api.whatsapp.com/send?phone=5219983183166&text=Buen dia, estoy interesado en unos tours" target="_blank"><i class="icon-whatsapp" aria-hidden="true"></i> +52 1 998 318 3166</a>
					</span>
				</div>
				<div class="datos-header">
					
					<span>
						
						<a href="tel:9982551446"><i class="icon-phone"></i> +52 1 998 255 1446</a>
					</span>
				</div>
				<div class="datos-header">
					<span>
						<a href="mailto:reservas@gocancuntours.com.mx"><i class="icon-email"></i>  reservas@gocancuntours.com.mx</a>
					</span>
				</div>
				<div>
					<a href="#" role="button" class="btn popovers" data-toggle="popover" title="" data-content="test content <a href='' title='test add link'>link on content</a>" data-original-title="test title"></a>
				</div>

					{{-- <div id="myTemplate">
					</div>
					<div class="moneda d-flex align-items-center text-left" text-decoration: none;"><img class="mr-1"  src="{{ url('/img/bandera-usa.png') }}" alt="bandera de mexico"> <span class="pt-1">USD</span></div> --}}
			    </div>
			</div>
		</div>

		<div class="container ver-movil ocultar">
			<div class="row d-flex align-items-center">
				<div class="col-auto icono-menu-movil">
					<a href="#" id="menu-hamburguer"><i class="icon-menu"></i></a>
				</div>
				 <div class="col text-center">
					<a href="{{ url('/') }}"><img class="img-fluid" src="{{ url('/img/logo.png') }}" alt="logo" width="80"></a>
				</div>
				<div class="col-auto menu-derecha-movil">
					<a href="{{ url('/carrito') }}">
							        	<i class="icon-basket"></i>
							        	<span id="num-items" class="p-0 m-0">{{Cart::content()->count()}}</span>
							        </a>
					<a href="https://api.whatsapp.com/send?phone=5219983183166&text=Buen dia, estoy interesado en unos tours" target="_blank"><i class="icon-whatsapp" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</header>
	
	{{-- @if(Request::path()=='/')
		 @include('includes.carousel')
	@endif --}}
	
	<!-- FINAL HEADER -->

	<div class="contenedor-menu d-flex align-items-center ocultar-movil" style=" background-color: rgba(255,255,255,0) !important; position: absolute; z-index: 300; width: 100%; box-shadow: none;">
		<div class="container" >
		  	<nav class="navbar navbar-expand-lg navbar-light ocultar-movil" style="border-bottom: 1px solid #fff; font-size: .8em;">
						<a class="navbar-brand" href="{{ url('/') }}">
								<img id="logo" class="img-fluid" src="{{ url('/img/logo.png') }}" alt="logo">
						</a>
					  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    	<span class="navbar-toggler-icon"></span>
					  	</button>

					 	 <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
					    	<ul class="navbar-nav mr-auto pull-xs-right">
					      		
					    	</ul>
					    	<ul class="nav navbar-nav pull-xs-right">
					    		<li class="nav-item">
					        		<a class="nav-link" href="{{ url('/') }}">INICIO <span class="sr-only">(current)</span></a>
					      		</li>
					      		<li class="nav-item dropdown">
					        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					         		 TOURS Y ACTIVIDADES
					        		</a>
						        	<div sty class="dropdown-menu sub-menu" aria-labelledby="navbarDropdown">
						          		<a class="dropdown-item" href="{{route("categories",['categorie'=> 'aventura'])}}">Aventura</a>
						          		<a class="dropdown-item" href="{{route("categories",['categorie'=> 'acuaticos'])}}">Acuaticos</a>
					      		</li>
					      		{{-- <li class="nav-item dropdown">
					        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					         		 Parques
					        		</a>
						        	<div class="dropdown-menu sub-menu" aria-labelledby="navbarDropdown">
						          		<a class="dropdown-item" href="#">Action</a>
						          		<a class="dropdown-item" href="#">Another action</a>
						         	<div class="dropdown-divider"></div>
						          		<a class="dropdown-item" href="#">Something else here</a>
						        	</div>
					      		</li> --}}
					      		<li class="nav-item">
					        		<a class="nav-link" href="{{route("categories",['categorie'=> 'sitios-arqueologicos'])}}">ARQUEOLÓGICOS</a>
					      		</li>
					      		<li class="nav-item">
					        		<a class="nav-link" href="{{route("categories",['categorie'=> 'sitios-arqueologicos'])}}">PARQUES</a>
					      		</li>
					      		<li class="nav-item">
					        		<a class="nav-link" href="{{ url('/combos/categoria') }}">COMBOS <span class="sr-only">(current)</span></a>
					      		</li>
					      		<li class="nav-item">
					        		<a class="nav-link" href="{{ url('contactanos') }}">CONTACTO <span class="sr-only">(current)</span></a>
					      		</li>
							    <li class="nav-item">
							        <a class="nav-link" href="{{ url('/carrito') }}">
							        	<i class="icon-basket"></i>
							        	<span id="num-items" class="p-0 m-0">{{Cart::content()->count()}}</span>
							        </a>
							    </li>
							</ul>
					    	{{-- <div class="col-md-3 ocultar-movil">
					    		 <a style="font-size: 1.5em" href="{{ url('/carrito') }}"><i class="fa fa-shopping-cart"></i> {{Cart::content()->count()}}</a>
					    	</div> --}}
					  </div>
			</nav>
		</div>
		{{-- transform: translateX(-100%); --}}
	</div>
	<!-- FINAL NAV -->


			<nav id="menu-movil">
				<ul>
					{{-- <li>
						<a href="#" id="ver-menu" title="">IDIOMA</a>
						<ul id="sub-menu" class="no-ver">
						    <li style="border-top: 1px solid #595858;"><a href="{{route("categories",['categorie'=> 'aventura'])}}">Aventura</a></li>
						    <li><a href="{{route("categories",['categorie'=> 'acuaticos'])}}">Acuaticos</a></li>
						</ul>
					</li> --}}
					<li><a href="{{ url('/') }}" title="">INICIO</a></li>
					<li>
						<a href="#" id="ver-menu" title="">TOURS Y ACTIVIDADES</a>
						<ul id="sub-menu" class="no-ver">
						    <li style="border-top: 1px solid #595858;"><a href="{{route("categories",['categorie'=> 'aventura'])}}">Aventura</a></li>
						    <li><a href="{{route("categories",['categorie'=> 'acuaticos'])}}">Acuaticos</a></li>
						</ul>
					</li>
					<li><a href="{{route("categories",['categorie'=> 'sitios-arqueologicos'])}}">ARQUEOLÓGICOS</a></li>
					<li><a href="{{route("categories",['categorie'=> 'sitios-arqueologicos'])}}">PARQUES</a></li>
					<li class="nav-item">
						<a href="{{ url('/combos/categoria') }}">COMBOS</a>
					</li>
					<li class="nav-item">
						<a href="{{ url('contactanos') }}">CONTACTO</a>
					</li>
				</ul>
			</nav>

			<div id="slides">
    <div class="slides-container">
      <img src="img/people.jpeg" alt="Cinelli">
      <img src="img/surly.jpeg" width="1024" height="682" alt="Surly">
      <img src="img/cinelli-front.jpeg" width="1024" height="683" alt="Cinelli">
      <img src="img/affinity.jpeg" width="1024" height="685" alt="Affinity">
    </div>
  </div>

	<div>
		@yield('contenido')
	</div>

	<footer>
		<div class="footer mt-4 pt-3">
			{{-- <div class="row justify-content-center">
				<div class="col-12 text-center">
					<p class="texto-mailchin m-0">suscríbete para encontrar las mejores ofertas</p>
				</div>
				<div class="col-md-auto mt-2">

					<form class="form-inline">
					  <div class="form-group mb-2">
					    <img src="{{ url('/img/carta.png') }}" alt="carta">
					  </div>
					  <div class="form-group mx-sm-3 mb-2">
					    <label for="email" class="sr-only">Email</label>
					    <input type="email" class="form-control form-control-sm suscripcion" id="email" placeholder="Email" >
					  </div>
					  <button type="submit" class="btn btn-primary mb-2 btn-sm">Suscribirme</button>
					</form>
				</div>
			</div> --}}
			<div class="row justify-content-center">
			    <div class="col-6 text-center iconos-footer mb-3 pb-2">
			     	<a href="https://www.facebook.com/gocancun1">
			     		<i class="icon-facebook"></i>
			     	</a>
			     	<a href="https://twitter.com/Go_Cancun_Tours">
			     		 <i class="icon-twitter"></i>
			     	</a>
			     	<a href="https://www.youtube.com/channel/UC1o0jRAdQ_MZX2bpsOW8wgw/videos?view_as=subscriber">
			     		 <i class=" icon-youtube-play"></i>
			     	</a>
			     	<a href="https://plus.google.com/u/1/116990261479691395006">
			     		 <i class=" icon-gplus"></i>
			     	</a>
			     	<a href="https://www.instagram.com/go_cancun_tours/">
			     		 <i class=" icon-instagram"></i>
			     	</a>
			    </div>
			</div>
			{{-- FINAL REDES SOCIALES --}}

			<div class="row justify-content-center">
				<img src="{{ url('/img/logo-blanco.png') }}" alt="logo-blanco">
			</div>

			<div class="row justify-content-center">
				<div class="col-9 text-left mt-3 menu-footer">
					<ul class="lista-footer">
						<a href="#">
							<li>Inicio</li>
						</a>
						<a href="#">
							<li>Tours</li>
						</a>
						<a href="#">
							<li>Parques</li>
						</a>
						<a href="#">
							<li>Combos</li>
						</a>
						<a href="#">
							<li>Ofertas</li>
						</a>
						<a href="#">
							<li>Habitaciones</li>
						</a>
						<a href="#">
							<li>Transportacion</li>
						</a>
						<a href="#">
							<li>Blog</li>
						</a>
						<a href="#">
							<li>Contactanos</li>
						</a>
						<a href="#">
							<li>Descuento para quintanarroenses</li>
						</a>
						<a href="#">
							<li>Aviso de privacidad</li>
						</a>
						<a href="#">
							<li>Politicas del sitio</li>
						</a>
						<a href="#">
							<li>Preguntas frecuentes</li>
						</a>
					</ul>
				</div>
			</div>

			<div class="row p-0 m-0">
				<div class="col-12 text-center">
					<p class="p-0 m-0 copy">&copy; Todos los derechos reservados Go Cancún Tours 2018</p>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script async src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script async src="{{ url('/js/prism.js') }}"></script>
    <script async src="{{ url('/js/parallax.min.js') }}"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.animate-enhanced.min.js"></script>
  <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
  <script>
    $('#slides').superslides({
    	play: '5000',
      animation: 'fade'
    });
  </script>


  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script>

  	    $(document).ready(function() {

      $('span[data-select2-id=5]').hide();

      	$.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '< Ant',
            nextText: 'Sig >',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
            };
            $.datepicker.setDefaults($.datepicker.regional['es']);
  $( function() {
    $( "#datepicker" ).datepicker({ minDate: 2 });
  } );

    @if(isset($dias_activo_tour))
        @if($dias_activo_tour!='')
        //Bloquear dias especificos de la semana
	           function noExcursion(date){
                var day = date.getDay();
                // aqui indicamos el numero correspondiente a los dias que ha de bloquearse (el 0 es Domingo, 1 Lunes, etc...) en el ejemplo bloqueo todos menos los lunes y jueves.
                return [({!! $dias_activo_tour !!}), ''];
                };

                //Crear el datepicker
                $("#datepicker").datepicker({
                beforeShowDay: noExcursion,
                minDate: 2,
            });
        @endif
    @endif

    const template = document.querySelector('#myTemplate');
tippy('.moneda', {
	html: template,
	arrow: true,
	interactive: true,
});
template.innerHTML = '<a href="#" style="font-size: 1em; color: #000; text-decoration: none;"><img class="moneda" src="{{ url('/img/bandera-mexico.png') }}" alt="bandera de mexico"> MXN</a>';

window.onscroll = function() {

	if(window.scrollY >= '344.5454406738281')
	{
		$(".contenedor-menu").css({
					"position": "fixed",
					"opacity": "0.5;",
					"width": "100%",
					"z-index": "100",
					"top": "0",
					"height": "45px",
					
				});
		$("#logo").css({"width": "80px",
						"transition": "all .5s ease-in-out"});
		$("#num-items").css({"top": "12px"});
		$("#barra-Categoria").css({"display":"block"});

		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				   $( "#barra-Categoria" ).remove();
				}
		

		
	}
	else
	{
		$(".contenedor-menu").removeAttr("style");
		$("#logo").removeAttr("style");
		$("#num-items").removeAttr("style");
		$("#barra-Categoria").removeAttr("style");
	}
};

$("#menu-hamburguer").click(function()
{
		$('#menu-movil').toggleClass('active');
		$('.icono-menu-movil').toggleClass('active');
		
});

$("#ver-menu").click(function()
{
	$('#sub-menu').toggleClass('ver');
});
    });

  </script>






</body>
</html>
