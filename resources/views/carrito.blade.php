@extends('layout')

@section('contenido')

@include('includes.pasos',array('paso1' => true,
                               'paso2' => false,
                               'paso3' => false))


{{-- {{ dd(Cart::content()) }} --}}
<?php /**/ $total = 0 /**/ ?>
<div class="container mt-5">
    @forelse(Cart::content() as $tour)
        <?php /**/ $total += $tour->options->total_sale /**/ ?>
        <div class="row mb-3 p-3" style="background-color: #fff;">
            <div class="col-md-3 col-sm-12">
                <img style="width: 100%;" src="{{ url('/img/tours')}}/{{ $tour->options->image }}" alt="tour" class="img-thumbnail">
            </div>
            <div class="col-md-6 col-sm-12 info-tour-pasos">
                <p class="h4">{{ $tour->name }}</p>
                <p class=" m-0 mt-2 mb-1">Fecha del tour: <b>{{$tour->options->date }}</b> </p>
                <p class=" m-0 mb-1">Numero de Adulto: <b>{{$tour->options->num_adult }}</b> </p>

                <p class="m-0 mb-1">Precio tour: <b>$ {{$tour->options->adult_price }}</b> <span>USD</span> </p>
                <p>Total a pagar: <b>$ {{$tour->options->total_adult_price }}</b> <span>USD</span> </p>

                <p class=" m-0 mb-1">Numero de Niños: <b>{{$tour->options->num_child }}</b> </p>
                <p class="m-0 mb-1">Precio tour: <b>$ {{$tour->options->child_price }}</b> <span>USD</span> </p>
                <p>Total a pagar: <b>$ {{$tour->options->total_child_price }}</b> <span>USD</span> </p>


            </div>
            <div class="col-md-3 col-sm-12 text-right pasos-total-pagar">
                <p><b>$ {{$tour->options->total_sale }}</b> <span>USD</span>
                        <a class="ocultar ver-movil basura-movil" href="{{ url("{$tour->rowId}", "eliminar-tour") }}">
                            <p  class="p-0"><i class="far fa-trash-alt"></i></p>
                        </a>
                </p>
                <a class="ocultar-movil ver" href="{{ url("{$tour->rowId}", "eliminar-tour") }}">
                    <p  class="p-0"><i class="far fa-trash-alt"></i></p>
                </a>
            </div>
        </div>
    @empty
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{ url('/img/carrito.png')}}" alt="carrito-vacio">
                <p class="h2">Carrito de compras vacio</p>
            </div>
        </div>
    @endforelse
    <div class="row">
        <div class="col-9 text-center">
                <a href="{{ url('/')}}" class="btn btn-warning btn-lg">
                    Seguir Comprando
                </a>
        </div>
        <div class="col-md-3 col-sm-12 text-right total-tours">
                <p>Total: <span>${{ number_format($total, 2, '.', ',') }}</span> <span>USD</span> </p>
                <a class="btn btn-primary" href="{{ url('/datos-del-cliente')}}" role="button">CONTINUAR <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</div>




@stop
