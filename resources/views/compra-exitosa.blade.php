@extends('layout')

@section('contenido')
    <div class="container">
        <div class="row">
        	<div class="row col-12 d-flex justify-content-center mt-3" >
            	 <div class="col-6 text-center p-1" style="background-color: rgb(87, 191, 200,0.5)">
            		<p class="m-0"> <b>IMPORTANTE: </b>  Por favor verifique la información enviada y siga las indicaciones para recibir su confirmación. Si tiene problemas con la llegada del cupón a su email, ponganse en contacto con nosotros.</p>
            	</div>
            </div>
            <div class="col-12">
                <img style="width: 100%;" src="{{ url('/img/gracias-compra.png') }}" alt="carta">
            </div>  
        </div>
    </div>
@stop
