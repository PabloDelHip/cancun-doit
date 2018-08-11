<?php use App\Http\Controllers\Sitio; ?>
@extends('layout')

@section('contenido')

		<section class="mt-3">

			{{-- <div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-10 col-sm-12">
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <a href="facebook.com"><img class="d-block w-100" src="data1/images/imagen2.png" alt="First slide"></a>
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="data1/images/imagen1.png" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="data1/images/imagen2.png" alt="Third slide">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>
			</div> --}}
			{{-- <article>
				<div id="wowslider-container1">
					<div class="ws_images">
						<ul>
							<li><img src="data1/images/imagen1.jpg" alt="imagen1" title="imagen1" id="wows1_0"/></li>
							<li><a href="#"><img src="data1/images/imagen2.png" alt="javascript slider" title="imagen2" id="wows1_1"/></a></li>
						</ul>
					</div>
					<div class="ws_bullets">
						<div>
							<a href="#" title="imagen1"><span><img src="data1/tooltips/imagen1.png" alt="imagen1"/>1</span></a>
							<a href="#" title="imagen2"><span><img src="data1/tooltips/imagen2.png" alt="imagen2"/>2</span></a>
							<a href="#" title="imagen3"><span><img src="data1/tooltips/imagen3.png" alt="imagen3"/>3</span></a>
						</div>
					</div>
					<div class="ws_script" style="position:absolute;left:-99%"><a href="#"></a></div>
					<div class="ws_shadow"></div>
				</div>
			</article> --}}


		<!-- FINAL SLIDER -->
		<div class="container p-md-0">

			<div class="row">

				<div class="col-md-12">

						<div class="row p-0 m-0">
							<article class="col-md-12 mt-4">
								<h1 class="titulo pb-1 mb-2">Tours y actividades en Cancún a precios economicos</h1>
								<h3 class="text-capitalize">Los mejores tours en Cancún y la Riviera Maya</h3>
								<div class="contenido text-justify">
									<p>Bienvenido a&nbsp;<strong>Go Canc&uacute;n Tours</strong>&nbsp;donde encontrar&aacute;s las mejores actividades en Canc&uacute;n y la riviera maya, <strong>excursiones</strong> y&nbsp;<strong>paseos.</strong></p>
								<p>En&nbsp;<strong>Cancun y Riviera Maya&nbsp;</strong>encontrar&aacute;s de todo y para todos los gustos y bolsillos: Tours economicos, tours de lujo, tours de arqueolog&iacute;a maya, tours de aventura, por mencionar algunos.</p>
								<p>Contamos con&nbsp;<strong>tours econ&oacute;micos en Canc&uacute;n</strong>, disfruta sin afectar tu bolsillo. Estaras feliz de saber que constantemente actualizamos nuestros precios para entregar los mejores descuentos en los<strong> tours de Canc&uacute;n</strong> y <strong>actividades en Riviera Maya.</strong></p>
								<p>Te espera la ciudad Maya de<strong>&nbsp;Chichen Itz&aacute;</strong>&nbsp;en Yucat&aacute;n, as&iacute; como&nbsp;<strong>Tulum y Coba</strong>&nbsp;en Quintana Roo, siendo as&iacute; a mexico&nbsp;<strong>maravillosa tur&iacute;sticamente</strong>, por la belleza del sureste mexicano, es pr&aacute;cticamente obligatorio visitarlo durante su estancia. Adem&aacute;s de&nbsp;<strong>Canc&uacute;n</strong>, podr&aacute; visitar&nbsp;<strong>Playa del Carmen</strong>&nbsp;que se encuentra ubicado justo en el coraz&oacute;n de la&nbsp;<strong>Riviera Maya,</strong>&nbsp;pr&aacute;cticamente a la mitad del trayecto entre&nbsp;<strong>Cancun y Tulum</strong>.</p>
								<p>En&nbsp;<strong>Playa del Carmen</strong>&nbsp;le espera la apacible tranquilidad de lo que antes era un pueblo pesquero,<strong>&nbsp;la vibrante vida tur&iacute;stica</strong>, Playa del Carmen es catalogada como la segunda ciudad tur&iacute;stica m&aacute;s importante despu&eacute;s de Cancun. Los atractivos a&uacute;n siguen, con nuestras islas como&nbsp;<strong>Isla mujeres y Cozumel</strong>, en donde conocer&aacute;s el segundo sistema m&aacute;s grande a nivel mundial de&nbsp;<strong>arrecifes de coral</strong>. Adem&aacute;s de la variedad de los famosos Parques Eco-arqueol&oacute;gicos como&nbsp;<strong>Xcaret, Xel H&aacute; y Xplor,</strong>&nbsp;y los diversos&nbsp;<strong>R&iacute;os subterr&aacute;neos</strong>, los tipos de&nbsp;<strong>cenotes en la zona</strong>, as&iacute; como&nbsp;<strong>el mejor personal de servicio que les espera para brindarles un experiencia &uacute;nica y profesional.</strong></p>
								</div>
							</article>
						</div>
						<!-- FINAL DESCRIPCION -->

                    @foreach($categories as $categorie)
                        <div class="row p-0 m-0">
							<article class=" col-md-12 mt-5">
								<h2 class="titulo">{{ $categorie->name }}</h2>
								<div class="contenido text-justify">
                                    {!! $categorie->description !!}
								</div>
							</article>
                        </div>
                        <div class="row col-12  pl-md-5 pr-md-5 ml-1">
                                <div class="slider responsive contenedor-carrousel">

                                    @foreach(Sitio::toursHome($categorie->id) as $tour)
                                        <div class="col-3">
                                            <div>
                                                <div class="contenedor m-0 p-0">
                                                    <a href='{{route("infoTour",['tour'=> $tour->url])}}'>
                                                        <img src="{{ url('img/tours/') }}/{{$tour->image}}"  class="img-fluid p-0 m-0" alt="{{$tour->name}}" title="{{$tour->name}}" style="width: 100%; height: 100%;">
                                                    </a>
                                                </div>
                                                <div class="contenedor-texto p-2 mb-1">
                                                    <h2>{{$tour->name}}</h2>
                                                    <div>
                                                        <p><i class="icon-clock" aria-hidden="true"></i> Duración: {{ $tour->duration }}</p>
                                                        <p><i class="icon-user" aria-hidden="true"></i> Persona: 1</p>
                                                        <p class="precio-contenedor">${{ $tour->adult_price }} <span class="usd">USD</span></p>
                                                        <a style="float: right;" href='{{route("infoTour",['tour'=> $tour->url])}}' class="btn btn-sm">Ver tour</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                    @endforeach

				</div>

				<!-- FINAL DIV MAIN -->
			</div>
		</div>
	</section>


@stop
