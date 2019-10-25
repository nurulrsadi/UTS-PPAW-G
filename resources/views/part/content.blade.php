@extends('layouts.app')

@section('content')
<!-- Content -->
				<section id="content">
					<div class="container">
						<div class="row aln-center">
							<div class="col-4 col-12-medium">

								<!-- Box #1 -->
									<section>
										<header>
											<h2>Loacation</h2>
											<h3>Jakarta, Bandung, Yogyakarta, Surabaya, Lampung</h3>
										</header>
										<a href="#" class="feature-image"><img src="images/tempat.png" alt="" /></a>
										<p>
                                            Berdiri sejak tahun 2004, Young and Creative studiio telah buka di 5 Kota Besar Indonesia.
                                            Selalu mencoba memberikan fasilitas untuk para konsumen, blabla bla
										</p>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Box #2 -->
									<section>
										<header>
											<h2>What Will You Get ?</h2>
											<h3>A fasilities that we have</h3>
										</header>
										<ul class="check-list">
											<li>Rekam musikmu langsung</li>
											<li>Semua alat musik elektronik dan akustik</li>
											<li>AC</li>
											<li>Kantin dan Free WIFI</li>
										</ul>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Box #3 -->
									<section>
										<header>
											<h2>Price</h2>
											<h3>Price list</h3>
										</header>
										<ul class="quote-list">
											<li>
												<img src="images/biasa4.jpg" alt="" />
												<p>"Paling mahal"</p>
												<span>AC + RECORD + WIFI + FOOD + MUSICAL INSTRUMENT</span>
											</li>
											<li>
												<img src="images/biasa1.jpg" alt="" />
												<p>"Sedeng aja"</p>
												<span>WIFI + FOOD + MUSICAL INSTRUMENT</span>
											</li>
											<li>
												<img src="images/biasa3.jpg" alt="" />
												<p>"Minimalis"</p>
												<span>MUSICAL INSTRUMENT</span>
											</li>
										</ul>
									</section>

							</div>
						</div>
					</div>
					<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
						<h1 class="display-4">Pricing</h1>
						<p class="lead"> </p>
					</div>
					
					<div class="container">
						<div class="card-deck mb-3 text-center">
							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">GOLD</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">$10 <small class="text-muted">/ hour</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>Large Room</li>
                                        <li>AC + Food + WIFI</li>
										<li>Record your music</li>
										<li>Musical Instrument (Full set)</li>
									</ul>
									<button type="button" class="btn btn-lg btn-block btn-primary">BOOKING NOW</button>
								</div>
							</div>
							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">SILVER</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">$7 <small class="text-muted">/ hour</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>Medium Room</li>
										<li>AC + Food + WIFI</li>
										<li>Musical Instrument (Full set)</li> <br>
									</ul>
									<button type="button" class="btn btn-lg btn-block btn-primary">BOOKING NOW</button>
								</div>
							</div>
							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 font-weight-normal">BRONZE</h4>
								</div>
								<div class="card-body">
									<h1 class="card-title pricing-card-title">$3 <small class="text-muted">/ hour</small></h1>
									<ul class="list-unstyled mt-3 mb-4">
										<li>Small Room</li>
										<li>AC + WIFI</li>
										<li>Musical Instrument (Full set)</li> <br>
									</ul>
									<button type="button" class="btn btn-lg btn-block btn-primary">BOOKING NOW</button>
								</div>
							</div>
						</div>
				</section>
@endsection