@extends('layouts.default')

@section('content')

	<div class="colorlib-loader"></div>

	<div id="page">

         @include('partials.navbar')

		<aside id="colorlib-hero">

			@include('partials.diningslide')

		</aside>

		<div id="colorlib-rooms" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Breakfast</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-1.jpg" class="room image-popup-link" style="background-image: url(images/bb1.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Kulhimas &amp; Roshi</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">3.00</span>
							</p>
							<!-- <p><a class="btn btn-primary btn-book">Take an Order</a></p> -->
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-2.jpg" class="room image-popup-link" style="background-image: url(images/bb2.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Kulhimas &amp; Disc</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">3.00</span>
							</p>
							<!-- <p><a class="btn btn-primary btn-book">Take an Order</a></p> -->
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-3.jpg" class="room image-popup-link" style="background-image: url(images/bb3.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Mashuni &amp; Roshi</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">3.00</span>
							</p>
							<!-- <p><a class="btn btn-primary btn-book">Take an Order</a></p> -->
						</div>
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-4.jpg" class="room image-popup-link" style="background-image: url(images/bb4.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Mashuni &amp; Disc</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">3.00</span>
							</p>
							<!-- <p><a class="btn btn-primary btn-book">Take an Order</a></p> -->
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-5.jpg" class="room image-popup-link" style="background-image: url(images/bb5.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Maldivian</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">5.00</span>
							</p>
							<!-- <p><a class="btn btn-primary btn-book">Take an Order</a></p> -->
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-6.jpg" class="room image-popup-link" style="background-image: url(images/bb6.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Continental</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">3.00</span>
							</p>
							<!-- <p><a class="btn btn-primary btn-book">Take an Order</a></p> -->
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Main Menu</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-1.jpg" class="room image-popup-link" style="background-image: url(images/mm1.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Fried Rice</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">7.00-8.00</span>
							</p>
							<p><a>Varieties Available</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-2.jpg" class="room image-popup-link" style="background-image: url(images/mm2.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">KothuRoshi</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">7.00-8.00</span>
							</p>
							<p><a>Varieties Available</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-3.jpg" class="room image-popup-link" style="background-image: url(images/mm3.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Fried Noodles</a></h3>
							<p class="price">
								span class="currency currency-menu">$</span>
								<span class="price-room price-menu">7.00-8.00</span>
							</p>
							<p><a>Varieties Available</a></p>
						</div>
					</div>
				</div>

				<div class="row row-pb-lg">
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-4.jpg" class="room image-popup-link" style="background-image: url(images/mm4.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Pasta &amp; Spaghetti</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">7.00-9.00</span>
							</p>
							<p><a>Varieties Available</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-5.jpg" class="room image-popup-link" style="background-image: url(images/mm5.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">SeaFood Platter</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">100.00</span>
							</p>
							<p><a>Varieties Available</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-6.jpg" class="room image-popup-link" style="background-image: url(images/mm6.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Burgers</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">5.00</span>
							</p>
							<p><a>Varieties Available</a></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Beverage Menu</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-7.jpg" class="room image-popup-link" style="background-image: url(images/d1.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Milkshakes &amp; Smoothies</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">4.00</span>
							</p>
							<p><a>Varieties Available</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-8.jpg" class="room image-popup-link" style="background-image: url(images/d2.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Hot Beverage</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">1.00-4.00</span>
							</p>
							<p><a>Varieties Available</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/menu-9.jpg" class="room image-popup-link" style="background-image: url(images/d3.jpg);"></a>
						<div class="desc text-center">
							<h3><a href="rooms-suites.html">Fresh Juices</a></h3>
							<p class="price">
								<span class="currency currency-menu">$</span>
								<span class="price-room price-menu">3.00</span>
							</p>
							<p><a>Varieties Available</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>




@include('partials.scripts')


@stop
