@extends('layouts.default')

@section('content')

<div class="colorlib-loader"></div>

	<div id="page">

        @include('partials.navbar')

		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/imgs_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner slider-text-inner2 text-center">
				   					<h2>Information</h2>
				   					<h1>About Us</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-about">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="about animate-box">
							<h2>Welcome to our Hotel</h2><br>
							<p>Located in Hulhumale, 5.6 km from Male City, Awesome Suite features air-conditioned rooms with free WiFi.
                                <br>
                              All rooms are fitted with a flat-screen TV. You will find a kettle in the room. The rooms include a private bathroom fitted with a shower. Extras include free toiletries and a hairdryer.
                                  <br>
                              The nearest airport is Male Airport, 4 km from Awesome Suite.
                               <br>
                             We speak your language!</p>
						</div>
					</div>
					<div class="col-md-6">
						<img class="img-responsive" src="images/imgs_bg_3.jpg" alt="">
					</div>
				</div>
			</div>
		</div>

	</div>


@include('partials.scripts')

@stop
