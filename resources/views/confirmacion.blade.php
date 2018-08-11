@extends('layout')

@section('contenido')
@include('includes.pasos',array('paso1' => true,
                               'paso2' => true,
                               'paso3' => true))
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        Featured
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-sm">
                            <tbody>
                                <tr>
                                    <th scope="row">Nombre:</th>
                                    <td>{{$client_data['name']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Apellido:</th>
                                    <td>{{$client_data['last_name']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email:</th>
                                    <td>{{$client_data['email']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Pais:</th>
                                    <td>Mexico</td>
                                </tr>
                                <tr>
                                    <th scope="row">Ciudad:</th>
                                    <td>{{$client_data['city']}} {{$client_data['state']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Num. Telefono:</th>
                                    <td>{{$client_data['phone']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Hotel:</th>
                                    <td>{{$client_data['hotel']}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Comentarios:</th>
                                    <td>{{$client_data['comments']}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @include('includes.detalles-venta')
        </div>
    </div>


@stop
