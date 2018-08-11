@extends('layout')

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-9 p-0 m-0">
            <h1 class="titulo pb-1 mb-2 mt-4">Solicita una cotización</h1>
            <p class="info-primero-contacto">Para disfrutar mejor tus vacaciones te ofrecemos desde 15% hasta 35% de descuento sobre el precio normal de los tours. Solicita tu cotización con la mayor atnicipación posible y conoce las formas de obtener los mejores precios en tours y acividades desde Cancun, Playa del Carmen y Riviera Maya.</p>
            <div class="col-12 text-center">
                <b class="info-tiempo-reserva">Reservas con menos de 2 días de anticipación estarán sujetas a disponibildiad.
                    Los precios pueden cambiar sin previo aviso.</b>
                    <p class="info-primero-contacto">Nuestro horario de atención para cotizaciones y reservas es de Lunes a Viernes de 9am-8pm | Sábados 9am - 5pm hora local de Cancun (GMT-5). Los Campos marcados con (*) son necesarios para enviar tu solicitud.</p>
            </div>

            <div class="formulario-contacto p-3">
                <form>
                    <div class="row">
                        <div class="col-6 mb-4">
                            <label for="formGroupExampleInput">Nombre y Apellido</label>
                            <input type="text" class="form-control form-control-sm" placeholder="First name">
                        </div>
                        <div class="col-6 mb-4">
                            <label for="formGroupExampleInput">E-mail</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Last name">
                        </div>
                        <div class="col-6 mb-4">
                            <label for="formGroupExampleInput">Ciudad de origen</label>
                            <input type="text" class="form-control form-control-sm" placeholder="First name">
                        </div>
                        <div class="col-6 mb-4">
                            <label for="formGroupExampleInput">Pais de origen</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Last name">
                        </div>
                        <div class="col-6 mb-4">
                            <label for="formGroupExampleInput">Telefono movil de contacto</label>
                            <input type="text" class="form-control form-control-sm" placeholder="First name">
                        </div>
                        <div class="col-6 mb-4">
                            <label for="formGroupExampleInput">Fecha de llegada</label>
                            <input type="date" class="form-control form-control-sm" placeholder="Last name">
                        </div>
                        <div class="col-6 mb-4">
                            <label for="formGroupExampleInput">Fecha de salida</label>
                            <input type="date" class="form-control form-control-sm" placeholder="First name">
                        </div>

                        <div class="col-12 mb-4 tours-contacto"></div>

                        <div class="col-8 mb-4 ">
                                <label for="formGroupExampleInput">Tour 1</label>
                                <input type="text" class="form-control form-control-sm" placeholder="First name">
                        </div>
                        <div class="col-4 mb-4">
                                <label for="formGroupExampleInput">Fecha</label>
                                <input type="date" class="form-control form-control-sm" placeholder="Last name">
                        </div>
                        <div class="col-8 mb-4 ">
                                <label for="formGroupExampleInput">Tour 2</label>
                                <input type="text" class="form-control form-control-sm" placeholder="First name">
                        </div>
                        <div class="col-4 mb-4">
                                <label for="formGroupExampleInput">Fecha</label>
                                <input type="date" class="form-control form-control-sm" placeholder="Last name">
                        </div>
                        <div class="col-8 mb-4 ">
                                <label for="formGroupExampleInput">Tour 3</label>
                                <input type="text" class="form-control form-control-sm" placeholder="First name">
                        </div>
                        <div class="col-4 mb-4">
                                <label for="formGroupExampleInput">Fecha</label>
                                <input type="date" class="form-control form-control-sm" placeholder="Last name">
                        </div>
                        <div class="col-8 mb-4 ">
                                <label for="formGroupExampleInput">Tour 4</label>
                                <input type="text" class="form-control form-control-sm" placeholder="First name">
                        </div>
                        <div class="col-4 mb-4">
                                <label for="formGroupExampleInput">Fecha</label>
                                <input type="date" class="form-control form-control-sm" placeholder="Last name">
                        </div>
                        <div class="col-8 mb-4 ">
                                <label for="formGroupExampleInput">Tour 5</label>
                                <input type="text" class="form-control form-control-sm" placeholder="First name">
                        </div>
                        <div class="col-4 mb-4">
                                <label for="formGroupExampleInput">Fecha</label>
                                <input type="date" class="form-control form-control-sm" placeholder="Last name">
                        </div>

                        <div class="col-12 mb-4 tours-contacto"></div>

                        <div class="col-4 mb-4 ">
                                <label for="formGroupExampleInput">Num. Adultos (+ 12 años)</label>
                                <input type="number" class="form-control form-control-sm" placeholder="First name">
                        </div>
                        <div class="col-4 mb-4">
                                <label for="formGroupExampleInput">Num. Niños 5 a 11 años</label>
                                <input type="number" class="form-control form-control-sm" placeholder="Last name">
                        </div>
                        <div class="col-4 mb-4">
                                <label for="formGroupExampleInput">Num. Infantes 0 a 4 años</label>
                                <input type="number" class="form-control form-control-sm" placeholder="Last name">
                        </div>

                        <div class="col-4 mb-4">
                                <label for="formGroupExampleInput">Hotel o sitio de</label>
                                <input type="number" class="form-control form-control-sm" placeholder="Last name">
                        </div>
                        <div class="col-4 mb-4">
                                <label for="formGroupExampleInput">Hotel o sitio de hospedaje</label>
                                <select class="form-control form-control-sm select-formulario">
                                        <option>-------</option>
                                        <option>Cancún zona hotelera</option>
                                        <option>Cancún centro</option>
                                        <option>Playa del Carmen centro</option>
                                        <option>Riviera Maya</option>
                                </select>
                        </div>
                        <div class="col-6 mb-4">
                                <label for="formGroupExampleInput">Comentarios</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LdVX1oUAAAAAMpzmMnNkMHUpv3uk03syhsPB7cN"></div>
                        <div class="col-12">
                                <input type="submit" value="Enviar" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @include('includes.aside')
    </div>
</div>
	{{--  @include('includes.aside')  --}}



@stop
