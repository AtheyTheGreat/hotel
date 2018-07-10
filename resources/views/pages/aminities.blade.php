@extends('layouts.default')

@section('content')

<body>

	<div class="colorlib-loader"></div>

	<div id="page">

        @include('partials.navbar')

		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/img_bg_5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner slider-text-inner2 text-center">
				   					<h2>Accomodation</h2>
				   					<h1>Our Amenities</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-amenities">
			<div class="container">
				<div class="row">
					<div class="amenities-flex">
						<div class="amenities-img animate-box" style="background-image: url(images/amenities-1.jpg);"></div>
						<div class="desc animate-box">
							<h2><a href="#">Airport Transfer &amp; Hotel Transfer</a></h2>
							<p class="price">
								<span class="free">Free</span>
							</p>
							<p>Dont worry we will send our staffs to pick you up from the aiport and bring you to us!</p>
						</div>
						<div class="desc animate-box">
							<h2><a href="#">Room Service </a></h2>
							<p class="price">
								<span class="free">Free</span>
							</p>
							<p>Our staffs will help with all kinds of room service you would like, If its refilling the minibar or helping with changing the sheets etc.</p>
						</div>
						<div class="amenities-img animate-box" style="background-image: url(images/room-5.jpg);"></div>
						<div class="amenities-img animate-box" style="background-image: url(images/amenities-2.jpg);"></div>
						<div class="desc animate-box">
							<h2><a href="#">Adventure Trips</a></h2>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room">59</span>
								<span class="per">/ per person</span>
							</p>
							<p>
							   ⦁	Local Island Visit<br>
                               ⦁	Snorkeling<br>
                               ⦁	Sandbank Trip<br>
                               ⦁	Beach BBQ<br>
                               ⦁	Souvenir Shops<br>
                               ⦁	Dolphin Cruise<br>

							   Excursion Time : 0800hrs – 1700hrs

						   </p>
						</div>
						<div class="desc animate-box">
							<h2><a href="#">BBQ Nights</a></h2>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room">359</span>
								<span class="per">/ per night</span>
							</p>
							<p>⦁  FISH, CHICKEN, SEAFOOD WILL BE SERVED<br>
                               ⦁	BARBECUE WILL START @ 7:30 PM IN HULHUMALE’<br>

                                 *MINIMUM 10 GUESTS REQUIRED
                                </p>
						</div>
						<div class="amenities-img animate-box" style="background-image: url(images/amenities-3.jpg);"></div>
						<div class="amenities-img animate-box" style="background-image: url(images/amenities-2.jpg);"></div>
						<div class="desc animate-box">
							<h2><a href="#">City Tour</a></h2>
							<p class="price">
								<span class="free">Free</span>
							</p>
							<p>
							   ⦁	Presidential Palace<br>
                               ⦁	Mini Market<br>
                               ⦁	Local Souvenir Shops<br>
                               ⦁	Fish Market<br>

							   Many more tourist locations in the City.<br>

							   *EXCURSION CAN BE ARRANGED UPON REQUEST AT ANY TIME


						   </p>
						</div>
						<div class="desc animate-box">
							<h2><a href="#">Night &amp; Day Fishing</a></h2>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room">359</span>
								<span class="per">/ per night</span>
							</p>
							<p>
								Go on an fishing trip to see the local fish in our reefs.<br>
								⦁	DAY FISHING – 8AM TO 1:30PM <br>
                                ⦁	NIGHT FISHING – 4PM TO 10PM <br>
                                *MINIMUM 6 PAX REQUIRED
                                </p>
						</div>
						<div class="amenities-img animate-box" style="background-image: url(images/amenities-3.jpg);"></div>
						<div class="amenities-img animate-box" style="background-image: url(images/amenities-2.jpg);"></div>
						<div class="desc animate-box">
							<h2><a href="#">Whale Submarine</a></h2>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room">59</span>
								<span class="per">/ per person</span>
							</p>
							<p>
                                Get a closer look at the reefs and coloury fish.<br>

								⦁	MORNING -11:00 – 12:30<br>
                                ⦁	AFTERNOON -14:30 – 15:30<br>
                                *DIVE TAKES APPROXIMATELY 45 MINUTES


						   </p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>


@include('partials.scripts')

@stop
