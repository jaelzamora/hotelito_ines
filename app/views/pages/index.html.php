<?php ob_start(); ?>


<!--about-us start -->
<section id="home" class="about-us">
	<div class="container">
		<div class="about-us-content">
			<div class="row">
				<div class="col-sm-12">
					<div class="single-about-us">
						<div class="about-us-txt">
							<h2>F<span>&</span>G Hoteles</h2>
							<br>
							<h1>Explora la belleza de Logroño</h1>
							<div class="about-btn">
								<a href="#desc-tabs" class="smooth-scroll">
									<button onclick="" class="about-view">
										HAZ TU RESERVA
									</button>
								</a>
							</div>
							<!--/.about-btn-->
						</div>
						<!--/.about-us-txt-->
					</div>
					<!--/.single-about-us-->
				</div>
				<!--/.col-->
				<div class="col-sm-0">
					<div class="single-about-us">

					</div>
					<!--/.single-about-us-->
				</div>
				<!--/.col-->
			</div>
			<!--/.row-->
		</div>
		<!--/.about-us-content-->
	</div>
	<!--/.container-->

</section>
<!--/.about-us-->
<!--about-us end -->

<!--travel-box start-->
<section class="travel-box">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-travel-boxes">
					<div id="desc-tabs" class="desc-tabs">

						<ul class="nav nav-tabs" role="tablist">

							<li role="presentation" class="active">
								<a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">
									<i class="fa fa-bed"></i>
									Buscar habitación
								</a>
							</li>

							<!-- <li role="presentation">
									 	<a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
									 		<i class="fa fa-tree"></i>
									 		Buscar plan
									 	</a>
									</li> -->
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">

							<div role="tabpanel" class="tab-pane active fade in" id="hotels">
								<div class="tab-para">

									<div class="row">

										<div class="col-lg-3 col-md-4 col-sm-5">
											<div class="single-tab-select-box">
												<h2>Entrada</h2>
												<div class="travel-check-icon">
													<form action="#">
														<input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
													</form>
												</div><!-- /.travel-check-icon -->
											</div>
											<!--/.single-tab-select-box-->
										</div>
										<!--/.col-->

										<div class="col-lg-3 col-md-4 col-sm-5">
											<div class="single-tab-select-box">
												<h2>Salida</h2>
												<div class="travel-check-icon">
													<form action="#">
														<input type="text" name="check_out" class="form-control" data-toggle="datepicker" placeholder="22 -01 - 2017 ">
													</form>
												</div><!-- /.travel-check-icon -->
											</div>
											<!--/.single-tab-select-box-->
										</div>
										<!--/.col-->

										<div class="col-lg-2 col-md-1 col-sm-4">
											<div class="single-tab-select-box">
												<h2>Adultos</h2>
												<div class="travel-select-icon">
													<select class="form-control ">

														<option value="default">1</option><!-- /.option-->

														<option value="2">2</option><!-- /.option-->

														<option value="3">3</option><!-- /.option-->
														<option value="4">4</option><!-- /.option-->

													</select><!-- /.select-->
												</div><!-- /.travel-select-icon -->
											</div>
											<!--/.single-tab-select-box-->
										</div>
										<!--/.col-->

										<div class="col-lg-2 col-md-1 col-sm-4">
											<div class="single-tab-select-box">
												<h2>Niños</h2>
												<div class="travel-select-icon">
													<select class="form-control ">

														<option value="default">0</option><!-- /.option-->

														<option value="1">1</option><!-- /.option-->

														<option value="2">2</option><!-- /.option-->
														<option value="3">3</option><!-- /.option-->

													</select><!-- /.select-->
												</div><!-- /.travel-select-icon -->
											</div>
											<!--/.single-tab-select-box-->
										</div>
										<!--/.col-->

										<div class="col-lg-2 col-md-1 col-sm-4">
											<div class="single-tab-select-box">
												<h2>Habitaciones</h2>
												<div class="travel-select-icon">
													<select class="form-control ">

														<option value="default">1</option><!-- /.option-->

														<option value="2">2</option><!-- /.option-->

														<option value="3">3</option><!-- /.option-->

													</select><!-- /.select-->
												</div><!-- /.travel-select-icon -->
											</div>
											<!--/.single-tab-select-box-->
										</div>
										<!--/.col-->

									</div>
									<!--/.row-->

									<div class="row m-t-5">
										<div class="col-sm-5"></div>
										<!--/.col-->
										<div class="col-sm-7">
											<div class="about-btn travel-mrt-0 pull-right">
												<button class="about-view travel-btn">
													Buscar
												</button>
												<!--/.travel-btn-->
											</div>
											<!--/.about-btn-->
										</div>
										<!--/.col-->

									</div>
									<!--/.row-->

								</div>
								<!--/.tab-para-->

							</div>
							<!--/.tabpannel-->

							<div role="tabpanel" class="tab-pane fade in" id="tours">
								<div class="tab-para">

									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-12">
											<div class="single-tab-select-box">

												<h2>destination</h2>

												<div class="travel-select-icon">
													<select class="form-control ">

														<option value="default">enter your destination country</option><!-- /.option-->

														<option value="turkey">turkey</option><!-- /.option-->

														<option value="russia">russia</option><!-- /.option-->
														<option value="egept">egypt</option><!-- /.option-->

													</select><!-- /.select-->
												</div><!-- /.travel-select-icon -->

												<div class="travel-select-icon">
													<select class="form-control ">

														<option value="default">enter your destination location</option><!-- /.option-->

														<option value="istambul">istambul</option><!-- /.option-->

														<option value="mosko">mosko</option><!-- /.option-->
														<option value="cairo">cairo</option><!-- /.option-->

													</select><!-- /.select-->
												</div><!-- /.travel-select-icon -->

											</div>
											<!--/.single-tab-select-box-->
										</div>
										<!--/.col-->

										<div class="col-lg-2 col-md-3 col-sm-4">
											<div class="single-tab-select-box">
												<h2>check in</h2>
												<div class="travel-check-icon">
													<form action="#">
														<input type="text" name="check_in" class="form-control" data-toggle="datepicker" placeholder="12 -01 - 2017 ">
													</form>
												</div><!-- /.travel-check-icon -->
											</div>
											<!--/.single-tab-select-box-->
										</div>
										<!--/.col-->

										<div class="col-lg-2 col-md-3 col-sm-4">
											<div class="single-tab-select-box">
												<h2>check out</h2>
												<div class="travel-check-icon">
													<form action="#">
														<input type="text" name="check_out" class="form-control" data-toggle="datepicker" placeholder="22 -01 - 2017 ">
													</form>
												</div><!-- /.travel-check-icon -->
											</div>
											<!--/.single-tab-select-box-->
										</div>
										<!--/.col-->

										<div class="col-lg-2 col-md-1 col-sm-4">
											<div class="single-tab-select-box">
												<h2>duration</h2>
												<div class="travel-select-icon">
													<select class="form-control ">

														<option value="default">5</option><!-- /.option-->

														<option value="10">10</option><!-- /.option-->

														<option value="15">15</option><!-- /.option-->
														<option value="20">20</option><!-- /.option-->

													</select><!-- /.select-->
												</div><!-- /.travel-select-icon -->
											</div>
											<!--/.single-tab-select-box-->
										</div>
										<!--/.col-->

										<div class="col-lg-2 col-md-1 col-sm-4">
											<div class="single-tab-select-box">
												<h2>members</h2>
												<div class="travel-select-icon">
													<select class="form-control ">

														<option value="default">1</option><!-- /.option-->

														<option value="2">2</option><!-- /.option-->

														<option value="4">4</option><!-- /.option-->
														<option value="8">8</option><!-- /.option-->

													</select><!-- /.select-->
												</div><!-- /.travel-select-icon -->
											</div>
											<!--/.single-tab-select-box-->
										</div>
										<!--/.col-->

									</div>
									<!--/.row-->

									<div class="row">
										<div class="col-sm-5">
											<div class="travel-budget">
												<div class="row">
													<div class="col-md-3 col-sm-4">
														<h3>budget : </h3>
													</div>
													<!--/.col-->
													<div class="co-md-9 col-sm-8">
														<div class="travel-filter">
															<div class="info_widget">
																<div class="price_filter">

																	<div id="slider-range"></div>
																	<!--/.slider-range-->

																	<div class="price_slider_amount">
																		<input type="text" id="amount" name="price" placeholder="Add Your Price" />
																	</div>
																	<!--/.price_slider_amount-->
																</div>
																<!--/.price-filter-->
															</div>
															<!--/.info_widget-->
														</div>
														<!--/.travel-filter-->
													</div>
													<!--/.col-->
												</div>
												<!--/.row-->
											</div>
											<!--/.travel-budget-->
										</div>
										<!--/.col-->
										<div class="clo-sm-7">
											<div class="about-btn travel-mrt-0 pull-right">
												<button class="about-view travel-btn">
													search
												</button>
												<!--/.travel-btn-->
											</div>
											<!--/.about-btn-->
										</div>
										<!--/.col-->

									</div>
									<!--/.row-->

								</div>
								<!--/.tab-para-->

							</div>
							<!--/.tabpannel-->


						</div>
						<!--/.tab content-->
					</div>
					<!--/.desc-tabs-->
				</div>
				<!--/.single-travel-box-->
			</div>
			<!--/.col-->
		</div>
		<!--/.row-->
	</div>
	<!--/.container-->

</section>
<!--/.travel-box-->
<!--travel-box end-->

<!--service start-->
<section id="service" class="service">
	<div class="container">

		<div class="service-counter text-center">

			<div class="col-md-4 col-sm-4">
				<div class="single-service-box">
					<div class="service-img mt-5">
						<a href="#"><span class="fa fa-wine-glass-alt fa-4x"></span></a>
					</div>
					<!--/.service-img-->
					<div class="service-content">
						<h2>
							<a href="#">
								Elige tu plan
							</a>
						</h2>
						<p>La mejor forma de conocer Logroño, nuestra cultura y gastronomía.</p>
					</div>
					<!--/.service-content-->
				</div>
				<!--/.single-service-box-->
			</div>
			<!--/.col-->

			<div class="col-md-4 col-sm-4">
				<div class="single-service-box">
					<div class="service-img mt-5">
						<a href="#"><span class="fa fa-bed fa-4x"></span></a>
					</div>
					<!--/.service-img-->
					<div class="service-content">
						<h2>
							<a href="#">
								Duerme al lado del ebro
							</a>
						</h2>
						<p>El mejor sitio para dormir sintiendo toda la esencia de la ciudad</p>
					</div>
					<!--/.service-content-->
				</div>
				<!--/.single-service-box-->
			</div>
			<!--/.col-->

			<div class="col-md-4 col-sm-4">
				<div class="single-service-box">
					<div class="service-img mt-5">
						<a href="#"><span class="fa fa-spa fa-4x m-auto"></span></a>
					</div>
					<!--/.service-img-->
					<div class="service-content">

						<h2>
							<a href="#">
								Prueba nuestros servicios
							</a>
						</h2>
						<p>Utiliza nuestros diversos servicios únicos</p>
					</div>
					<!--/.service-content-->
				</div>
				<!--/.single-service-box-->
			</div>
			<!--/.col-->

		</div>
		<!--/.statistics-counter-->
	</div>
	<!--/.container-->

</section>
<!--/.service-->
<!--service end-->

<!--galley start-->
<section id="gallery" class="gallery">
	<div class="container">
		<div class="gallery-details">
			<div class="gallary-header text-center">
				<h2>
					Nuestras habitaciones
				</h2>
				<p>
					¿Dónde quieres pasar la noche?
				</p>
			</div>
			<!--/.gallery-header-->
			<div class="gallery-box">
				<div class="gallery-content">
					<div class="filtr-container">
						<div class="row">

							<div class="col-md-6">
								<div class="filtr-item">
									<img class="fotoLarga" src="public/images/gallary/suite.jpg" alt="portfolio image" />
									<div class="item-title">
										<a href="#">
											Junior Suite
										</a>
										<p><span>Jacuzzi</span><span>Lujo</span></p>
									</div><!-- /.item-title -->
								</div><!-- /.filtr-item -->
							</div><!-- /.col -->

							<div class="col-md-6">
								<div class="filtr-item">
									<img class="fotoCuadrado" src="public/images/gallary/habitacion2.jpg" alt="portfolio image" />
									<div class="item-title">
										<a href="#">
											Estándar Doble
										</a>
										<p><span>Intimidad</span><span>Tranquilidad</span></p>
									</div> <!-- /.item-title-->
								</div><!-- /.filtr-item -->
							</div><!-- /.col -->

							<div class="col-md-4">
								<div class="filtr-item">
									<img class="fotoCuadrado" src="public/images/gallary/prueba.jpg" alt="portfolio image" />
									<div class="item-title">
										<a href="#">
											Doble Individual
										</a>
										<p><span>25 tours</span><span>10 places</span></p>
									</div><!-- /.item-title -->
								</div><!-- /.filtr-item -->
							</div><!-- /.col -->

							<div class="col-md-4">
								<div class="filtr-item">
									<img src="public/images/gallary/individual.jpg" alt="portfolio image" />
									<div class="item-title">
										<a href="#">
											Individual
										</a>
										<p><span>18 tours</span><span>9 places</span></p>
									</div> <!-- /.item-title-->
								</div><!-- /.filtr-item -->
							</div><!-- /.col -->

							<div class="col-md-4">
								<div class="filtr-item">
									<img src="public/images/gallary/triple.jpg" alt="portfolio image" />
									<div class="item-title">
										<a href="#">
											Triple
										</a>
										<p><span>14 tours</span><span>12 places</span></p>
									</div> <!-- /.item-title-->
								</div><!-- /.filtr-item -->
							</div><!-- /.col -->

							<div class="col-md-8">
								<div class="filtr-item">
									<img src="public/images/gallary/suiteSpa.jpg" alt="portfolio image" />
									<div class="item-title">
										<a href="#">
											Suite Principal
										</a>
										<p><span>14 tours</span><span>6 places</span></p>
									</div> <!-- /.item-title-->
								</div><!-- /.filtr-item -->
							</div><!-- /.col -->

						</div><!-- /.row -->

					</div><!-- /.filtr-container-->
				</div><!-- /.gallery-content -->
			</div>
			<!--/.galley-box-->
		</div>
		<!--/.gallery-details-->
	</div>
	<!--/.container-->

</section>
<!--/.gallery-->
<!--gallery end-->


<!--discount-offer start-->
<section class="discount-offer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="dicount-offer-content text-center">
					<h2>Reserva tu habitación antes de Navidad con grandes descuentos</h2>
					<div class="campaign-timer">
						<div id="timer">
							<div class="time time-after" id="days">
								<span></span>
							</div>
							<!--/.time-->
							<div class="time time-after" id="hours">

							</div>
							<!--/.time-->
							<div class="time time-after" id="minutes">

							</div>
							<!--/.time-->
							<div class="time" id="seconds">

							</div>
							<!--/.time-->
						</div>
						<!--/.timer-->
					</div>
					<!--/.campaign-timer-->
					<div class="about-btn">
						<button class="about-view discount-offer-btn">
							reserva
						</button>
					</div>
					<!--/.about-btn-->


				</div><!-- /.dicount-offer-content-->
			</div><!-- /.col-->
		</div><!-- /.row-->
	</div><!-- /.container-->

</section><!-- /.discount-offer-->
<!--discount-offer end-->

<!--packages start-->
<section id="pack" class="packages">
	<div class="container">
		<div class="gallary-header text-center">
			<h2>
				Paquetes especiales
			</h2>
			<p>
				Disfruta de nuestros paquetes y ofertas únicas al mejor precio
			</p>
		</div>
		<!--/.gallery-header-->
		<div class="packages-content">
			<div class="row">

				<div class="col-md-4 col-sm-6">
					<div class="single-package-item">
						<img src="public/images/packages/vino.jpg" alt="package-place">
						<div class="single-package-item-txt">
							<h3>Botella de vino <span class="pull-right">$50</span></h3>
							<div class="packages-para">
								<p>
									<span>
										<i class="fa fa-angle-right"></i> 2 Noches
									</span>
								</p>
								<p>
									<i class="fa fa-angle-right"></i> reservando desde la web
								</p>
							</div>
							<!--/.packages-para-->
							<div class="packages-review">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span>254 Opiniones</span>
								</p>
							</div>
							<!--/.packages-review-->
							<div class="about-btn">
								<button class="about-view packages-btn">
									Reserva
								</button>
							</div>
							<!--/.about-btn-->
						</div>
						<!--/.single-package-item-txt-->
					</div>
					<!--/.single-package-item-->

				</div>
				<!--/.col-->

				<div class="col-md-4 col-sm-6">
					<div class="single-package-item">
						<img src="public/images/packages/spa.jpg" alt="package-place">
						<div class="single-package-item-txt">
							<h3>Noche + Spa <span class="pull-right">$120</span></h3>
							<div class="packages-para">
								<p>
									<span>
										<i class="fa fa-angle-right"></i> 1 noche
									</span>
								</p>
								<p>
									<i class="fa fa-angle-right"></i> spa incluido
								</p>
							</div>
							<!--/.packages-para-->
							<div class="packages-review">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span>344 Opiniones</span>
								</p>
							</div>
							<!--/.packages-review-->
							<div class="about-btn">
								<button class="about-view packages-btn">
									Reserva
								</button>
							</div>
							<!--/.about-btn-->
						</div>
						<!--/.single-package-item-txt-->
					</div>
					<!--/.single-package-item-->

				</div>
				<!--/.col-->

				<div class="col-md-4 col-sm-6">
					<div class="single-package-item">
						<img src="public/images/packages/bodega.jpg" alt="package-place">
						<div class="single-package-item-txt">
							<h3>Noche + Bodega <span class="pull-right">$140</span></h3>
							<div class="packages-para">
								<p>
									<span>
										<i class="fa fa-angle-right"></i> 1 noche en el hotel
									</span>
								</p>
								<p>

									<i class="fa fa-angle-right"></i> 1 tour en una bodega
								</p>
							</div>
							<!--/.packages-para-->
							<div class="packages-review">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span>544 Opiniones</span>
								</p>
							</div>
							<!--/.packages-review-->
							<div class="about-btn">
								<button class="about-view packages-btn">
									Reserva
								</button>
							</div>
							<!--/.about-btn-->
						</div>
						<!--/.single-package-item-txt-->
					</div>
					<!--/.single-package-item-->

				</div>
				<!--/.col-->

				<div class="col-md-4 col-sm-6">
					<div class="single-package-item">
						<img src="public/images/packages/restaurante.jpg" alt="package-place">
						<div class="single-package-item-txt">
							<h3>Noche + Restaurante <span class="pull-right">$250</span></h3>
							<div class="packages-para">
								<p>
									<span>
										<i class="fa fa-angle-right"></i> 2 Noches
									</span>
									<i class="fa fa-angle-right"></i> Comida

								</p>
								<p>
									<i class="fa fa-angle-right"></i> Mejor restaurante
								</p>
							</div>
							<!--/.packages-para-->
							<div class="packages-review">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span>625 Opiniones</span>
								</p>
							</div>
							<!--/.packages-review-->
							<div class="about-btn">
								<button class="about-view packages-btn">
									Reserva
								</button>
							</div>
							<!--/.about-btn-->
						</div>
						<!--/.single-package-item-txt-->
					</div>
					<!--/.single-package-item-->

				</div>
				<!--/.col-->

				<div class="col-md-4 col-sm-6">
					<div class="single-package-item">
						<img src="public/images/packages/pirgaguismo.jpg" alt="package-place">
						<div class="single-package-item-txt">
							<h3>Noche + Piragüismo <span class="pull-right">$150</span></h3>
							<div class="packages-para">
								<p>
									<span>
										<i class="fa fa-angle-right"></i>1 Noche + actividad
									</span>

								</p>
								<p>
									<i class="fa fa-angle-right"></i> Piragüismo en el Ebro
								</p>
							</div>
							<!--/.packages-para-->
							<div class="packages-review">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span>379 Opiniones</span>
								</p>
							</div>
							<!--/.packages-review-->
							<div class="about-btn">
								<button class="about-view packages-btn">
									Reserva
								</button>
							</div>
							<!--/.about-btn-->
						</div>
						<!--/.single-package-item-txt-->
					</div>
					<!--/.single-package-item-->

				</div>
				<!--/.col-->

				<div class="col-md-4 col-sm-6">
					<div class="single-package-item">
						<img src="public/images/packages/cata.jpg" alt="package-place">
						<div class="single-package-item-txt">
							<h3>Noche + Cata <span class="pull-right">$135</span></h3>
							<div class="packages-para">
								<p>
									<span>
										<i class="fa fa-angle-right"></i> 1 Noche + Cata
									</span>

								</p>
								<p>
									<i class="fa fa-angle-right"></i> El mejor vino del hotel
								</p>
							</div>
							<!--/.packages-para-->
							<div class="packages-review">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span>447 Opiniones</span>
								</p>
							</div>
							<!--/.packages-review-->
							<div class="about-btn">
								<button class="about-view packages-btn">
									Reserva
								</button>
							</div>
							<!--/.about-btn-->
						</div>
						<!--/.single-package-item-txt-->
					</div>
					<!--/.single-package-item-->

				</div>
				<!--/.col-->

			</div>
			<!--/.row-->
		</div>
		<!--/.packages-content-->
	</div>
	<!--/.container-->

</section>
<!--/.packages-->
<!--packages end-->

<!-- testemonial Start -->
<section class="testemonial">
	<div class="container">

		<div class="gallary-header text-center">
			<h2>
				Opiniones de Clientes
			</h2>
			<p>
				Una serie de opiniones de nuestros clientes más satisfechos
			</p>

		</div>
		<!--/.gallery-header-->

		<div class="owl-carousel owl-theme" id="testemonial-carousel">

			<div class="home1-testm item">
				<div class="home1-testm-single text-center">
					<div class="home1-testm-img">
						<img src="public/images/client/persona1.jpg" alt="img" />
					</div>
					<!--/.home1-testm-img-->
					<div class="home1-testm-txt">
						<span class="icon section-icon">
							<i class="fa fa-quote-left" aria-hidden="true"></i>
						</span>
						<p>
							Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
						<h3>
							<a href="#">
								kevin watson
							</a>
						</h3>
						<h4>london, england</h4>
					</div>
					<!--/.home1-testm-txt-->
				</div>
				<!--/.home1-testm-single-->

			</div>
			<!--/.item-->

			<div class="home1-testm item">
				<div class="home1-testm-single text-center">
					<div class="home1-testm-img">
						<img src="public/images/client/persona2.jpg" alt="img" />
					</div>
					<!--/.home1-testm-img-->
					<div class="home1-testm-txt">
						<span class="icon section-icon">
							<i class="fa fa-quote-left" aria-hidden="true"></i>
						</span>
						<p>
							Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
						<h3>
							<a href="#">
								kevin watson
							</a>
						</h3>
						<h4>london, england</h4>
					</div>
					<!--/.home1-testm-txt-->
				</div>
				<!--/.home1-testm-single-->

			</div>
			<!--/.item-->

			<div class="home1-testm item">
				<div class="home1-testm-single text-center">
					<div class="home1-testm-img">
						<img src="public/images/client/persona3.jpg" alt="img" />
					</div>
					<!--/.home1-testm-img-->
					<div class="home1-testm-txt">
						<span class="icon section-icon">
							<i class="fa fa-quote-left" aria-hidden="true"></i>
						</span>
						<p>
							Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
						<h3>
							<a href="#">
								kevin watson
							</a>
						</h3>
						<h4>london, england</h4>
					</div>
					<!--/.home1-testm-txt-->
				</div>
				<!--/.home1-testm-single-->

			</div>
			<!--/.item-->

			<div class="home1-testm item">
				<div class="home1-testm-single text-center">
					<div class="home1-testm-img">
						<img src="public/images/client/persona4.jpg" alt="img" />
					</div>
					<!--/.home1-testm-img-->
					<div class="home1-testm-txt">
						<span class="icon section-icon">
							<i class="fa fa-quote-left" aria-hidden="true"></i>
						</span>
						<p>
							Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
						<h3>
							<a href="#">
								kevin watson
							</a>
						</h3>
						<h4>london, england</h4>
					</div>
					<!--/.home1-testm-txt-->
				</div>
				<!--/.home1-testm-single-->

			</div>
			<!--/.item-->

			<div class="home1-testm item">
				<div class="home1-testm-single text-center">
					<div class="home1-testm-img">
						<img src="public/images/client/persona5.jpg" alt="img" />
					</div>
					<!--/.home1-testm-img-->
					<div class="home1-testm-txt">
						<span class="icon section-icon">
							<i class="fa fa-quote-left" aria-hidden="true"></i>
						</span>
						<p>
							Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
						<h3>
							<a href="#">
								kevin watson
							</a>
						</h3>
						<h4>london, england</h4>
					</div>
					<!--/.home1-testm-txt-->
				</div>
				<!--/.home1-testm-single-->

			</div>
			<!--/.item-->

			<div class="home1-testm item">
				<div class="home1-testm-single text-center">
					<div class="home1-testm-img">
						<img src="public/images/client/persona6.jpg" alt="img" />
					</div>
					<!--/.home1-testm-img-->
					<div class="home1-testm-txt">
						<span class="icon section-icon">
							<i class="fa fa-quote-left" aria-hidden="true"></i>
						</span>
						<p>
							Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
						<h3>
							<a href="#">
								kevin watson
							</a>
						</h3>
						<h4>london, england</h4>
					</div>
					<!--/.home1-testm-txt-->
				</div>
				<!--/.home1-testm-single-->

			</div>
			<!--/.item-->

			<div class="home1-testm item">
				<div class="home1-testm-single text-center">
					<div class="home1-testm-img">
						<img src="public/images/client/persona7.jpg" alt="img" />
					</div>
					<!--/.home1-testm-img-->
					<div class="home1-testm-txt">
						<span class="icon section-icon">
							<i class="fa fa-quote-left" aria-hidden="true"></i>
						</span>
						<p>
							Lorem ipsum dolor sit amet, contur adip elit, sed do mod incid ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
						<h3>
							<a href="#">
								kevin watson
							</a>
						</h3>
						<h4>london, england</h4>
					</div>
					<!--/.home1-testm-txt-->
				</div>
				<!--/.home1-testm-single-->

			</div>
			<!--/.item-->

		</div>
		<!--/.testemonial-carousel-->
	</div>
	<!--/.container-->

</section>
<!--/.testimonial-->
<!-- testemonial End -->


<!--special-offer start-->
<section id="spo" class="special-offer">
	<div class="container">
		<div class="special-offer-content">
			<div class="row">
				<div class="col-sm-8">
					<div class="single-special-offer">
						<div class="single-special-offer-txt">
							<h2>Logroño en Navidad</h2>
							<div class="packages-review special-offer-review">
								<p>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<span>544 Opiniones</span>
								</p>
							</div>
							<!--/.packages-review-->
							<div class="packages-para special-offer-para">
								<p>
									<span>
										<i class="fa fa-angle-right"></i> 4 Días 5 Noches
									</span>
									<span>
										<i class="fa fa-angle-right"></i> 2 Personas
									</span>
									<span>
										<i class="fa fa-angle-right"></i> Spa
									</span>
								</p>
								<p>
									<span>
										<i class="fa fa-angle-right"></i> Autobús
									</span>
									<span>
										<i class="fa fa-angle-right"></i> Desayuno
									</span>
								</p>
								<p class="offer-para">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation una <br> ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>
							</div>
							<!--/.packages-para-->
							<div class="offer-btn-group">
								<div class="about-btn">
									<button class="about-view packages-btn">
										¡Me apunto!
									</button>
								</div>
								<!--/.about-btn-->
							</div>
							<!--/.offer-btn-group-->
						</div>
						<!--/.single-special-offer-txt-->
					</div>
					<!--/.single-special-offer-->
				</div>
				<!--/.col-->
				<div class="col-sm-4">
					<div class="single-special-offer">
						<div class="single-special-offer-bg">
							<img src="public/images/offer/offer-shape.png" alt="offer-shape">
						</div>
						<!--/.single-special-offer-bg-->
						<div class="single-special-shape-txt">
							<h3>Oferta Especial</h3>
							<h4><span>40%</span><br>descuento</h4>
							<p><span>$552</span><br>normal € 920</p>
						</div>
						<!--/.single-special-shape-txt-->
					</div>
					<!--/.single-special-offer-->
				</div>
				<!--/.col-->
			</div>
			<!--/.row-->
		</div>
		<!--/.special-offer-content-->
	</div>
	<!--/.container-->

</section>
<!--/.special-offer end-->
<!--special-offer end-->



<!--blog start-->
<section id="blog" class="blog">
	<div class="container">
		<div class="blog-details">
			<div class="gallary-header text-center">
				<h2>
					Nuestro Blog
				</h2>
				<p>
					Estos son las últimas noticias y novedades de nuestro blog
				</p>
			</div>
			<!--/.gallery-header-->
			<div class="blog-content">
				<div class="row">

					<?php include 'app/views/posts/list.php' ?>

				</div>
				<!--/.row-->
			</div>
			<!--/.blog-content-->
			<br>
			<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['user_data']['role']=='admin') { ?>
				<a href="<?= ROOT_PATH . 'posts/add' ?>"><button class="book-btn" type="submit">Add</button></a>
			<?php } ?>
		</div>
		<!--/.blog-details-->
	</div>
	<!--/.container-->

</section>
<!--/.blog-->
<!--blog end-->


<!--subscribe start-->
<section id="subs" class="subscribe">
	<div class="container">
		<div class="subscribe-title text-center">
			<h2>
				Contacta con nosotros
			</h2>
			<p>
				¡Para cualquier duda, información y sugerencia!
			</p>
		</div>
		<form>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="custom-input-group">
						<input type="email" class="form-control" placeholder="Escribe tu email">
						<button class="appsLand-btn subscribe-btn">Enviar</button>
						<div class="clearfix"></div>
						<i class="fa fa-envelope"></i>
					</div>

				</div>
			</div>
		</form>
	</div>

</section>
<!--subscribe end-->









<?php $content = ob_get_clean(); ?>
<?php include 'app/views/layout.html.php'; ?>