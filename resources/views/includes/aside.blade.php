
<aside class="col ml-4 mt-4 p-0">

    @if(preg_match("/informacion$/",request()->path()))
    <div class="card mb-4 mt-4">
            <div class="card-header text-center tituloGuardarReserva p-0 m-0 pt-2 pb-2">
                <span>Reservar</span>
            </div>
            <div class="card-body">
                <p class="card-title tituloInfoParticipantes text-center"><i class="fas fa-users"></i> Info participantes</p>
                <form action="{{ route('ingresar-carrito') }}" method="POST">
                        {!! csrf_field() !!}
                    <div class="form-group row">
                        <label for="numAdultos" class="col-sm-7 col-form-label m-0">Num Adultos:</label>
                        <div class="col-sm-5 m-0">
                            <input name="num_adultos" type="number" class="form-control" id="numAdultos" value="1" min="1" max="160">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="numNinos" class="col-sm-7 col-form-label m-0">Num Niños <span>(7-11)</span></label>
                        <div class="col-sm-5 m-0">
                            <input name="num_ninos" type="number" class="form-control" id="numNinos" value="0" min="0" max="160">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="FechaTour">Fecha:</label>
                        <input name="fecha_tour"  type="text" class="form-control" id="datepicker" required>
                    </div>
                    @foreach($tourInfo as $tour)
                        <input type="hidden" name="id" value="{{ $tour->id }}">
                    @endforeach</h1>
                    <button type="submit" class="btn btn-danger">Reservar</button>
                </form>
            </div>
        </div>
    @else
        <div class="row p-0 m-0">
            {{--  <div class="card text-center">
                  <h5 class="card-header p-1 tituloBuscar">Busca Tour</h5>
                  <div class="card-body pt-2 m-0">
                      <select class="js-example-basic-single" name="state">
                          <optgroup label="Arqueología Maya">
                              <option value="AL">Alabama</option>
                              <option value="WY">Wyoming</option>
                          </optgroup>
                          <optgroup label="Arqueología Maya">
                              <option value="AL">Alabama</option>
                              <option value="WY">Wyoming</option>
                          </optgroup>
                          <optgroup label="Arqueología Maya">
                              <option value="AL">Alabama</option>
                              <option value="WY">Wyoming</option>
                          </optgroup>
                    </select>
                    <a href="#" class="btn btn-primary   mt-4">Ver Tour</a>
                  </div>
            </div>  --}}
        </div>
        <!-- Buscar tour -->
    @endif

    <div class="row p-0 ml-1 mt-3 mb-3">
            <img src="{{ url('/img/pay-pal-imagen.png') }}" alt="pay-pal" style="height: 50px;">
            <img class="mt-2" src="{{ url('/img/sistema-apartado.png') }}" alt="pay-pal" style="height: 65px;">
        </div>

    {{-- @if(request()->path()=='/') --}}

					<div class="row ">
						<div class=" col-12 p-0 m-0 text-center titulo-promociones">
							<h3 class="m-0 p-1 h5">Tours en promoción de Cancún</h3>
						</div>

						<div class=" col-12 p-0 m-0 mt-2 contenido-promociones">
							<a href="#">
								<div class="row p-0 m-0">
									<div class="col-4 p-0 m-0">
										<img src="http://placeimg.com/82/75/nature" alt="xcaret" class=" p-0 m-0">
									</div>
									<div class="col-8 p-0 m-0" >
										<h3 class="m-0 p-1 h6">Xplor tour</h3>
										<p class="m-0 ml-1 mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										<b class="ml-1 mt-1">
											Desde: <span>$2,300.00</span>
										</b>
									</div>
								</div>
							</a>
						</div>

						<div class=" col-12 p-0 m-0 mt-2 contenido-promociones">
							<a href="#">
								<div class="row p-0 m-0">
									<div class="col-4 p-0 m-0">
										<img src="http://placeimg.com/82/75/nature" alt="xcaret" class=" p-0 m-0">
									</div>
									<div class="col-8 p-0 m-0" >
										<h3 class="m-0 p-1 h6">Xplor tour</h3>
										<p class="m-0 ml-1 mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										<b class="ml-1 mt-1">
											Desde: <span>$2,300.00</span>
										</b>
									</div>
								</div>
							</a>
						</div>

						<div class=" col-12 p-0 m-0 mt-2 contenido-promociones">
							<a href="#">
								<div class="row p-0 m-0">
									<div class="col-4 p-0 m-0">
										<img src="http://placeimg.com/82/75/nature" alt="xcaret" class=" p-0 m-0">
									</div>
									<div class="col-8 p-0 m-0" >
										<h3 class="m-0 p-1 h6">Xplor tour</h3>
										<p class="m-0 ml-1 mb-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										<b class="ml-1 mt-1">
											Desde: <span>$2,300.00</span>
										</b>
									</div>
								</div>
							</a>
						</div>
					</div><!-- TOURS EN PROMOCION -->

					{{-- <div class="row alojamiento">
						<div class=" col-12 p-0 m-0 ml-4 mt-3 text-center titulo-promociones">
							<h3 class="m-0 p-1 h5">Alojamiento en Cancún</h3>
						</div>

						<div class="col-12 ml-4">
							<a href="#">
								<img class="ml-5 pt-1 pb-1" src="{{ url('/img/alojamiento.png') }}" style="height: 170px;" alt="bandera de mexico">
							</a>
						</div>
					</div> --}}

</aside>
