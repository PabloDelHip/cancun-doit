<?php use App\Http\Controllers\Sitio; ?>
@extends('layout')

@section('contenido')

<div id="barra-Categoria" class=" .ocultar-movil">
    
</div>
<div class="parallax-window" id="tamano-parallax" data-parallax="scroll" data-image-src="{{ url('/img/'.$image) }}">
</div>
@include('includes.migajas', array('miVar' => 'Tours > Cancún'))
<div class="container">
    <div class="row">
        <div class="col-md-9 p-md-0">
                <span>
						<div class="row p-0 m-0">
							<article class="col-12 mt-4">
								<h1 class="titulo pb-1 mb-2">{{ $categorie_name }}</h1>
								<h3 class="text-capitalize">Los mejores tours en cancún a precio de descuento</h3>
								<div class="contenido text-justify">
									<p>
                                            {!! $description !!}
									</p></div>
							</article>
						</div>
						<!-- FINAL DESCRIPCION -->
					</span>
                @foreach($tours as $tour)

                <div class="row p-0 m-0 pt-2 pb-2 mb-3 descripcion-tour">
                    <div class="col-md-3 col-sm-12 p-0 m-0 ml-2">
                        <img src="{{ url('img/tours/') }}/{{$tour->image}}" alt="xcaret" class="img-fluid p-0 m-0" style="max-width: 190px;">
                    </div>
                    <div class="col-md-5 col-sm-12 p-0 m-0">
                        <h3 class="nombre-tours p-0">
                            {{$tour->name}}
                        </h3>
                        <p class="contenido">
                            {{$tour->description_information}}
                        </p>
                    </div>

                    <div class="col-md col-sm-12 precio-tour text-right pt-2">
                        <p class="m-0">
                                <span>Adulto: </span>
                                <del>${{ $tour->adult_discount_price }}</del>
                                <span class="precio-publico ml-1">${{ $tour->adult_price }} </span>
                                <span>USD</span>
                            </p>
                            <p class="m-0">
                                !AHORRA {{ Sitio::porcentajeDosNumeros($tour->adult_discount_price,$tour->adult_price) }}%!
                            </p>
                            <p class="m-0">
                                <span>Duracion: </span>
                                <span class="ml-1 dato-extra-tour">{{ $tour->duration }} </span>
                            </p>


                            <p class="m-0">
                                <span>Categoria: </span>
                                <span class="ml-1 dato-extra-tour">{{ $categorie_name }}</span>
                            </p>
                            <a style="bottom: 0;" href='{{route("infoTour",['tour'=> $tour->url])}}' class="btn btn-warning boton-ver-tour mt-2"> Ver tour</a>
                    </div>
                </div>

                @endforeach
        </div>
        {{--  FINAL LISTA TOURS  --}}

        @include('includes.aside')

    </div>
</div>



@stop
