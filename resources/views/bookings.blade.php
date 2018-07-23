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
				   					<h2>Get your Reservation !</h2>
				   					<h1>Book Now</h1>
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
						<h3>Get Your Reservation</h3>

						@if (Session::has('flash_message'))
                            <div class="alert alert-success">{{ Session::get('flash_message')}}</div>
						@endif
						<form method="post" action="{{ route('bookings.store')}}">
							{{ csrf_field() }}

						<div class="row form-group">
						<div class="col-md-6">
							<label for="datepicker">Check-in:</label>
							<div class="form-field">
		                      <i class="icon icon-calendar2"></i>
		                      <input type="text" name="check_in" id="datepicker" class="form-control date" placeholder="Check-in date">
		                    </div>
							@if ($errors->has('check_in'))
							 <small class="form-text invalid-feedback">{{ $errors->first('check_in')}}</small>
							 @endif
						</div>

						<div class="col-md-6">
							<label for="datepicker">Check-out:</label>
							<div class="form-field">
		                      <i class="icon icon-calendar2"></i>
		                      <input type="text" name="check_out" id="datepicker" class="form-control date" placeholder="Check-out date">
		                    </div>
							@if ($errors->has('check_out'))
							 <small class="form-text invalid-feedback">{{ $errors->first('check_out')}}</small>
							 @endif
						</div>
						</div>

						<div class="row form-group">
						<div class="col-md-6">
							<label for="hotel">Hotel:</label>
							<div class="form-field">
  		                      <select name="hotel" id="hotel" class="form-control" placeholder="Select Hotel">
								<option value="1">Awesome Suite</option>
  		                      </select>
		                    </div>
							@if ($errors->has('hotel'))
							 <small class="form-text invalid-feedback">{{ $errors->first('hotel')}}</small>
							 @endif
						</div>

						<div class="col-md-6">
							<label for="datepicker">Rooms:</label>
							<div class="form-field">
  		                      <select name="rooms" id="rooms" class="form-control" placeholder="How Many">
                                <option value="placeholder"></option>
								<option value="1">1</option>
  		                        <option value="2">2</option>
								<option value="3">3</option>
  		                      </select>
		                    </div>
							@if ($errors->has('rooms'))
							 <small class="form-text invalid-feedback">{{ $errors->first('rooms')}}</small>
							 @endif
						</div>
						</div>

						<div class="row form-group">
						<div class="col-md-6">
							<label for="hotel">Adults:</label>
							<div class="form-field">
  		                      <select name="adults" id="adults" class="form-control" placeholder="How Many">
                                <option value="placeholder"></option>
								<option value="1">1</option>
  		                        <option value="2">2</option>
								<option value="3">3</option>
		                        <option value="4">4</option>
		                        <option value="5">5+</option>
  		                      </select>
		                    </div>
							@if ($errors->has('adults'))
							 <small class="form-text invalid-feedback">{{ $errors->first('adults')}}</small>
							 @endif
						</div>

						<div class="col-md-6">
							<label for="datepicker">child:</label>
							<div class="form-field">
  		                      <select name="child" id="child" class="form-control" placeholder="How Many">
                                <option value="0">-</option>
								<option value="1">1</option>
  		                        <option value="2">2</option>
								<option value="3">3</option>
		                        <option value="4">4</option>
		                        <option value="5">5+</option>
  		                      </select>
		                    </div>
							@if ($errors->has('child'))
							 <small class="form-text invalid-feedback">{{ $errors->first('child')}}</small>
							 @endif
						</div>
						</div>

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
	</div>




    @include('partials.scripts')

@stop
