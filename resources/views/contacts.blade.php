@extends('layouts.default')

@section('content')

<div class="colorlib-loader"></div>

	<div id="page">

     @include('partials.navbar')

		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/imgs_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner slider-text-inner2 text-center">
				   					<h2>Get in touch</h2>
				   					<h1>Contact Us</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>





		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Contact Information</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location-2"></i></span> Lot No. 10486, <br> Nirolhu Magu Hulhumale’, Maldives.</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://9603350086">+ 335-0086</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@awesomemaldives.net">Info@awesomemaldives.net</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="http:\\awesomemaldives.net">Awesomemaldives.net</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Get In Touch</h3>

						@if (Session::has('flash_message'))
                            <div class="alert alert-success">{{ Session::get('flash_message')}}</div>
						@endif
						<form method="post" action="{{ route('contacts.store')}}">
							{{ csrf_field() }}

						<div class="row form-group">
						<div class="col-md-6">
							<label>First Name:</label>
							<input type="text" class="form-control" name="firstname">
							@if ($errors->has('firstname'))
							 <small class="form-text invalid-feedback">{{ $errors->first('firstname')}}</small>
							 @endif
						</div>

						<div class="col-md-6">
							<label>Last Name:</label>
							<input type="text" class="form-control" name="lastname">
							@if ($errors->has('lastname'))
							 <small class="form-text invalid-feedback">{{ $errors->first('lastname')}}</small>
							 @endif
						</div>
						</div>

						<div class="row form-group">
						<div class="col-md-12">
							<label>Email:</label>
							<input type="email" class="form-control" name="email">
							@if ($errors->has('email'))
							 <small class="form-text invalid-feedback">{{ $errors->first('email')}}</small>
							 @endif
						</div>
						</div>

						<div class="row form-group">
						<div class="col-md-12">
							<label>Message:</label>
							<textarea name="message" class="form-control" ></textarea>
							@if ($errors->has('message'))
							 <small class="form-text invalid-feedback">{{ $errors->first('message')}}</small>
							 @endif
						</div>
						</div>

						<div class="form-group text-center">
						 <button class="btn btn-success">Submit</button>
						</div>

						</form>

					</div>
				</div>
			</div>
		</div>

		<div id="map" class="colorlib-map"></div>



	</div>




    @include('partials.scripts')

@stop
