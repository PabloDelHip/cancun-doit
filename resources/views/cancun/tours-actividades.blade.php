@extends('layout')

@section('contenido')
<div class="parallax-window" style="height: 300px;" data-parallax="scroll" data-image-src="{{ url('/img/encabezado.jpg') }}">
</div>

@include('includes.migajas', array('miVar' => 'Tours > Cancún'))

<div class="container p-md-0">
			<div class="row">

				<div class="col-md-9 p-md-0">

					<span>
						<div class="row p-0 m-0">
							<article class="col-12 mt-4">
								<h1 class="titulo pb-1 mb-2">tours y actividades en cancún</h1>
								<h3 class="text-capitalize">Los mejores tours en cancún a precio de descuento</h3>
								<div class="contenido text-justify">
									<p>
										Bienvenido a Cancún Adventure Tours donde encontrarás información sobre atracciones, excursiones y paseos en Cancún y la Riviera Maya en México.
									</p>
									<p>Descubre la verdadera aventura en Cancún con nuestra oferta de actividades la cual siempre estamos incrementando y mejorando de acuerdo a los comentarios de nuestros clientes, todo esto con los mejores precios y descuentos.</p>
									<p>Cancún es la puerta a increibles tours de aventura en el Caribe Mexicano. La diversión está garantizada, puedes "volar" sobre la jungla en una tirolesa, nadar con delfines, practicar esnorquel o bucear dentro de los muchos cenotes que se encuentran en la península de Yucatán; también puedes visitar algunos de los maravillosos parques ecológicos localizados en la Riviera Maya</p>
									<p>Otros tours te llevarán a conducir tu propio speed boat por manglares de la laguna de Cancún como el famoso jungle tour. También ofrecemos varios tours donde descubrirás la maravillosa cultura maya que puede apreciarse en los distintos sitios arqueológicos como Tulum o Chichén Itzá</p>
								</div>
							</article>
						</div>
						<!-- FINAL DESCRIPCION -->
					</span>

					<span>
						<div class="row p-0 m-0">
							<article class=" col-md-12 mt-5">
								<h2 class="titulo">Xcaret y parques temáticos en cancún</h2>
								<div class="contenido text-justify">
									<p>
										Bienvenido a Cancún Adventure Tours donde encontrarás información sobre atracciones, excursiones y paseos en Cancún y la Riviera Maya en México.
									</p>
									<p>Descubre la verdadera aventura en Cancún con 		nuestra oferta de actividades la cual siempre 		estamos incrementando y mejorando de acuerdo a los 	   comentarios de nuestros clientes, todo esto con 		los mejores precios y descuentos.
									</p>
								</div>
							</article>
						</div>

						<div class="row p-0 m-0 pt-2 pb-2 mb-3 descripcion-tour">
							<div class="col-3 p-0 m-0 ml-2">
								<img src="http://placeimg.com/190/150/nature" alt="xcaret" class="img-fluid p-0 m-0">
							</div>
							<div class="col-5 p-0 m-0">
								<h3 class="nombre-tours p-0">
									Xcaret Basico
								</h3>
								<p class="contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit molestiae cupiditate accusamus quam voluptates pariatur quae quas laudantium quod, placeat dolorum eius, mollitia neque praesentium tempore, consequuntur nobis voluptas itaque.</p>
							</div>

							<div class="col precio-tour text-right">
								<p class="m-0">
										<span>Adulto: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>

									<p class="m-0">
										<span>Niños: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>
									<p class="m-0">
										!AHORRA 20%!
									</p>
									<p class="m-0">
										<span>Duracion: </span>
										<span class="ml-1 dato-extra-tour">Todo el dia </span>
									</p>


									<p class="m-0">
										<span>Categoria: </span>
										<span class="ml-1 dato-extra-tour">Parque ecologico </span>
									</p>
									<a href="#" class="btn btn-warning boton-ver-tour mt-2"> Ver tour</a>
							</div>
						</div>
						<!-- FINAL DESCRIPCION TOUR -->

						<div class="row p-0 m-0 pt-2 pb-2 mb-3 descripcion-tour">
							<div class="col-3 p-0 m-0 ml-2">
								<img src="http://placeimg.com/190/150/nature" alt="xcaret" class="img-fluid p-0 m-0">
							</div>
							<div class="col-5 p-0 m-0">
								<h3 class="nombre-tours p-0">
									Xcaret Basico
								</h3>
								<p class="contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit molestiae cupiditate accusamus quam voluptates pariatur quae quas laudantium quod, placeat dolorum eius, mollitia neque praesentium tempore, consequuntur nobis voluptas itaque.</p>
							</div>

							<div class="col precio-tour text-right">
								<p class="m-0">
										<span>Adulto: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>

									<p class="m-0">
										<span>Niños: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>
									<p class="m-0">
										!AHORRA 20%!
									</p>
									<p class="m-0">
										<span>Duracion: </span>
										<span class="ml-1 dato-extra-tour">Todo el dia </span>
									</p>


									<p class="m-0">
										<span>Categoria: </span>
										<span class="ml-1 dato-extra-tour">Parque ecologico </span>
									</p>
									<a href="#" class="btn btn-warning boton-ver-tour mt-2"> Ver tour</a>
							</div>
						</div>
						<!-- FINAL DESCRIPCION TOUR -->

						<div class="row p-0 m-0 pt-2 pb-2 mb-3 descripcion-tour">
							<div class="col-3 p-0 m-0 ml-2">
								<img src="http://placeimg.com/190/150/nature" alt="xcaret" class="img-fluid p-0 m-0">
							</div>
							<div class="col-5 p-0 m-0">
								<h3 class="nombre-tours p-0">
									Xcaret Basico
								</h3>
								<p class="contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit molestiae cupiditate accusamus quam voluptates pariatur quae quas laudantium quod, placeat dolorum eius, mollitia neque praesentium tempore, consequuntur nobis voluptas itaque.</p>
							</div>

							<div class="col precio-tour text-right">
								<p class="m-0">
										<span>Adulto: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>

									<p class="m-0">
										<span>Niños: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>
									<p class="m-0">
										!AHORRA 20%!
									</p>
									<p class="m-0">
										<span>Duracion: </span>
										<span class="ml-1 dato-extra-tour">Todo el dia </span>
									</p>


									<p class="m-0">
										<span>Categoria: </span>
										<span class="ml-1 dato-extra-tour">Parque ecologico </span>
									</p>
									<a href="#" class="btn btn-warning boton-ver-tour mt-2"> Ver tour</a>
							</div>
						</div>
						<!-- FINAL DESCRIPCION TOUR -->

						<div class="row p-0 m-0 pt-2 pb-2 mb-3 descripcion-tour">
							<div class="col-3 p-0 m-0 ml-2">
								<img src="http://placeimg.com/190/150/nature" alt="xcaret" class="img-fluid p-0 m-0">
							</div>
							<div class="col-5 p-0 m-0">
								<h3 class="nombre-tours p-0">
									Xcaret Basico
								</h3>
								<p class="contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit molestiae cupiditate accusamus quam voluptates pariatur quae quas laudantium quod, placeat dolorum eius, mollitia neque praesentium tempore, consequuntur nobis voluptas itaque.</p>
							</div>

							<div class="col precio-tour text-right">
								<p class="m-0">
										<span>Adulto: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>

									<p class="m-0">
										<span>Niños: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>
									<p class="m-0">
										!AHORRA 20%!
									</p>
									<p class="m-0">
										<span>Duracion: </span>
										<span class="ml-1 dato-extra-tour">Todo el dia </span>
									</p>


									<p class="m-0">
										<span>Categoria: </span>
										<span class="ml-1 dato-extra-tour">Parque ecologico </span>
									</p>
									<a href="#" class="btn btn-warning boton-ver-tour mt-2"> Ver tour</a>
							</div>
						</div>
						<!-- FINAL DESCRIPCION TOUR -->

						<div class="row p-0 m-0 pt-2 pb-2 mb-3 descripcion-tour">
							<div class="col-3 p-0 m-0 ml-2">
								<img src="http://placeimg.com/190/150/nature" alt="xcaret" class="img-fluid p-0 m-0">
							</div>
							<div class="col-5 p-0 m-0">
								<h3 class="nombre-tours p-0">
									Xcaret Basico
								</h3>
								<p class="contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit molestiae cupiditate accusamus quam voluptates pariatur quae quas laudantium quod, placeat dolorum eius, mollitia neque praesentium tempore, consequuntur nobis voluptas itaque.</p>
							</div>

							<div class="col precio-tour text-right">
								<p class="m-0">
										<span>Adulto: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>

									<p class="m-0">
										<span>Niños: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>
									<p class="m-0">
										!AHORRA 20%!
									</p>
									<p class="m-0">
										<span>Duracion: </span>
										<span class="ml-1 dato-extra-tour">Todo el dia </span>
									</p>


									<p class="m-0">
										<span>Categoria: </span>
										<span class="ml-1 dato-extra-tour">Parque ecologico </span>
									</p>
									<a href="#" class="btn btn-warning boton-ver-tour mt-2"> Ver tour</a>
							</div>
						</div>
						<!-- FINAL DESCRIPCION TOUR -->

						<div class="row p-0 m-0 pt-2 pb-2 mb-3 descripcion-tour">
							<div class="col-3 p-0 m-0 ml-2">
								<img src="http://placeimg.com/190/150/nature" alt="xcaret" class="img-fluid p-0 m-0">
							</div>
							<div class="col-5 p-0 m-0">
								<h3 class="nombre-tours p-0">
									Xcaret Basico
								</h3>
								<p class="contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit molestiae cupiditate accusamus quam voluptates pariatur quae quas laudantium quod, placeat dolorum eius, mollitia neque praesentium tempore, consequuntur nobis voluptas itaque.</p>
							</div>

							<div class="col precio-tour text-right">
								<p class="m-0">
										<span>Adulto: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>

									<p class="m-0">
										<span>Niños: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>
									<p class="m-0">
										!AHORRA 20%!
									</p>
									<p class="m-0">
										<span>Duracion: </span>
										<span class="ml-1 dato-extra-tour">Todo el dia </span>
									</p>


									<p class="m-0">
										<span>Categoria: </span>
										<span class="ml-1 dato-extra-tour">Parque ecologico </span>
									</p>
									<a href="#" class="btn btn-warning boton-ver-tour mt-2"> Ver tour</a>
							</div>
						</div>

						<div class="row p-0 m-0 pt-2 pb-2 mb-3 descripcion-tour">
							<div class="col-3 p-0 m-0 ml-2">
								<img src="http://placeimg.com/190/150/nature" alt="xcaret" class="img-fluid p-0 m-0">
							</div>
							<div class="col-5 p-0 m-0">
								<h3 class="nombre-tours p-0">
									Xcaret Basico
								</h3>
								<p class="contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit molestiae cupiditate accusamus quam voluptates pariatur quae quas laudantium quod, placeat dolorum eius, mollitia neque praesentium tempore, consequuntur nobis voluptas itaque.</p>
							</div>

							<div class="col precio-tour text-right">
								<p class="m-0">
										<span>Adulto: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>

									<p class="m-0">
										<span>Niños: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>
									<p class="m-0">
										!AHORRA 20%!
									</p>
									<p class="m-0">
										<span>Duracion: </span>
										<span class="ml-1 dato-extra-tour">Todo el dia </span>
									</p>


									<p class="m-0">
										<span>Categoria: </span>
										<span class="ml-1 dato-extra-tour">Parque ecologico </span>
									</p>
									<a href="#" class="btn btn-warning boton-ver-tour mt-2"> Ver tour</a>
							</div>
						</div>
						<!-- FINAL DESCRIPCION TOUR -->

						<div class="row p-0 m-0 pt-2 pb-2 mb-3 descripcion-tour">
							<div class="col-3 p-0 m-0 ml-2">
								<img src="http://placeimg.com/190/150/nature" alt="xcaret" class="img-fluid p-0 m-0">
							</div>
							<div class="col-5 p-0 m-0">
								<h3 class="nombre-tours p-0">
									Xcaret Basico
								</h3>
								<p class="contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit molestiae cupiditate accusamus quam voluptates pariatur quae quas laudantium quod, placeat dolorum eius, mollitia neque praesentium tempore, consequuntur nobis voluptas itaque.</p>
							</div>

							<div class="col precio-tour text-right">
								<p class="m-0">
										<span>Adulto: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>

									<p class="m-0">
										<span>Niños: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>
									<p class="m-0">
										!AHORRA 20%!
									</p>
									<p class="m-0">
										<span>Duracion: </span>
										<span class="ml-1 dato-extra-tour">Todo el dia </span>
									</p>


									<p class="m-0">
										<span>Categoria: </span>
										<span class="ml-1 dato-extra-tour">Parque ecologico </span>
									</p>
									<a href="#" class="btn btn-warning boton-ver-tour mt-2"> Ver tour</a>
							</div>
						</div>
						<!-- FINAL DESCRIPCION TOUR -->

						<div class="row p-0 m-0 pt-2 pb-2 mb-3 descripcion-tour">
							<div class="col-3 p-0 m-0 ml-2">
								<img src="http://placeimg.com/190/150/nature" alt="xcaret" class="img-fluid p-0 m-0">
							</div>
							<div class="col-5 p-0 m-0">
								<h3 class="nombre-tours p-0">
									Xcaret Basico
								</h3>
								<p class="contenido">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit molestiae cupiditate accusamus quam voluptates pariatur quae quas laudantium quod, placeat dolorum eius, mollitia neque praesentium tempore, consequuntur nobis voluptas itaque.</p>
							</div>

							<div class="col precio-tour text-right">
								<p class="m-0">
										<span>Adulto: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>

									<p class="m-0">
										<span>Niños: </span>
										<del>$200</del>
										<span class="precio-publico ml-1">$1,800.00 </span>
										<span>MXN</span>
									</p>
									<p class="m-0">
										!AHORRA 20%!
									</p>
									<p class="m-0">
										<span>Duracion: </span>
										<span class="ml-1 dato-extra-tour">Todo el dia </span>
									</p>


									<p class="m-0">
										<span>Categoria: </span>
										<span class="ml-1 dato-extra-tour">Parque ecologico </span>
									</p>
									<a href="#" class="btn btn-warning boton-ver-tour mt-2"> Ver tour</a>
							</div>
						</div>
					</span>
					{{-- FINAL DESCRIPCION TOUR --}}
				</div>

				<!-- FINAL DIV MAIN -->

				@include('includes.aside')
			</div>
		</div>

@stop
